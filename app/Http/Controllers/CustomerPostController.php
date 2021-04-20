<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerPost;

class CustomerPostController extends Controller
{
    

    public function index() {

    	$posts = CustomerPost::all();

    	//$posts = Post::where('customer_id', 1)->get();

    	// return response()->json($posts);

    	return view('customer/all_posts', compact('posts'));

    }

}
