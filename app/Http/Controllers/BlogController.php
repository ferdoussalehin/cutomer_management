<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{

    public function index() {

        $posts = DB::table('posts')
                ->join('categories', 'posts.category_id',  'categories.id')
                ->select('posts.*', 'categories.name')
                ->paginate(3);

                // echo "<pr>";
                // print_r($posts);

                // return response()->json($posts);


    	return view('blog', compact('posts'));

    }
}
