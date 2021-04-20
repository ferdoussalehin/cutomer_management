<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CustomerPost extends Model
{
    protected $fillable = [
    	'customer_id', 'category_id', 'title', 'description'
    ];

    public function customer() {

    	return $this->belongsTo('App\Customer');
    }

    public function post_category() {

    	return $this->belongsTo('App\PostCategory');
    }

}
