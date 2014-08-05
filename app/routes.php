<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/practice', function() {

    $fruit = Array('Apples', 'Oranges', 'Pears');

    echo Pre::render($fruit,'Fruit');

});

Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    return Pre::render($results);

});

Route::get('/practice-creating', function() {

    # Instantiate a new Book model class
    $spot = new Spot();

    # Set 
    $spot->title = 'Ruggles Courts';
    $spot->location = 'Ruggles T Station';
    $spot->description = 'small ledges and manny pads at some basketball courts, good flatground';

    # This is where the Eloquent ORM magic happens
    $spot->save();

    return 'A new spot has been added! Check your database to see...';

});

Route::get('/practice-reading', function() {

    # The all() method will fetch all the rows from a Model/table
    $spots = Spot::all();

    # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
    foreach($spots as $spot) {
        echo $spot->title.'<br>';
    }

});

Route::get('/add', function()
{
    return View::make('add');
});

# Process add form
Route::post('/add/', function() {

	$spot = new Spot();
	
	$spot->title = Input::get('title');
	$spot->location = Input::get('location');
	$spot->description = Input::get('description');
	
	# Magic: Eloquent
	$spot->save();
	
	return View::make('spotadded');;
		
});

Route::get('/spots', function()
{
    return View::make('spots');
});

Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

Route::get('/newuser', function()
{
    return View::make('newuser');
});

Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->email    = Input::get('email');

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/newuser');

        }
    )
);

Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);

Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('/');
        }
    )
);

Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});
