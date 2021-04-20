<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $fillable = [
    	'name', 'email'
    ];

    public function phone() {

    	return $this->hasOne('App\Phone');

    }

    public function customer_posts() {

    	return $this->hasMany('App\CustomerPost');

    }
}
