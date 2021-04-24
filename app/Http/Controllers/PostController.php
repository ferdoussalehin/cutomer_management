<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{


    public function add_post() {



                // echo "<pr>";
                // print_r($posts);

                // return response()->json($posts);


        // Get categories from categories table sss
        $category = DB::table('categories')->get();
    	return view('post.add_post', compact('category'));

    }

    public function insert_post( Request $request) {

        // $validated = $request->validate([
        // 'title' => 'required|unique:posts|max:255',
        // 'detail' => 'required',
        // 'image' => 'required | mimes:jpeg,jpg,png | max:1000',
        // ]);

    	$data = array();
    	$data['title'] = $request->post_title;
        $data['category_id'] = $request->category_id;
    	$data['detail'] = $request->post_detail;

        if($request->image) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $category = DB::table('posts')->insert($data);

        return redirect()->route('blog')->with('message', 'Post inserted!');

    	//return response()->json($data);
    	// print_r($request->input());

    }

    public function update_post(Request $request) {


        $data = array();
        $data['title'] = $request->post_title;
        $data['category_id'] = $request->category_id;
        $data['detail'] = $request->post_detail;

        $post_id = $request->post_id;

        $post = DB::table('posts')->where('id', $request->post_id)->first();

        if($request->image) {
            unlink('images/'.$post->image);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = $post->image;
        }

        $post = DB::table('posts')->where('id', $post_id)->update($data);

        return redirect()->route('blog')->with('message', 'Post updated!');

        //return response()->json($post);
        // print_r($request->input());

    }

    public function delete_post($id) {

        $category = DB::table('posts')->where('id',$id)->delete();

        return redirect()->back()->with('message', 'Post deleted!');

    }

    public function edit_post($id) {

        $post = DB::table('posts')->where('id',$id)->first();
        $categories = DB::table('categories')->get();
        return view('post.edit_post', compact('post', 'categories'));

    }

    public function view_post($id) {

        $post = DB::table('posts')
                ->join('categories', 'posts.category_id', 'categories.id')
                ->select('posts.*', 'categories.name')
                ->where('posts.id',$id)
                ->first();

        return view('post.view_post', compact('post'));
    }

}
