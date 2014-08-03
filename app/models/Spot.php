<?php

class Spot extends Eloquent {

		# The guarded properties specifies which attributes should *not* be mass-assignable
		protected $guarded = array('id', 'created_at', 'updated_at');

		# Relationship method...
    public function tags() {
    
     # Books belong to many Tags
        return $this->belongsToMany('Tag');
    }

}