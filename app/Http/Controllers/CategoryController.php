<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
    public function about() {
    	return view('about');
    }

    public function add_category() {

    	$categories = DB::table('categories')->get();

        // print_r($categories);exit();

        return view('category.add_category', compact('categories'));

    }

    public function insert_category( Request $req) {

        $validatedData = $req->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'slug' => 'required',
            ]);
    	
    	$data = array();
    	$data['name'] = $req->category_name;
    	$data['slug'] = $req->slug;

    	$category = DB::table('categories')->insert($data);

        return redirect()->back()->with('message', 'Category inserted!');
    	// return response()->json($data);
    	// print_r($req->input());

    }

    public function view_category($id) {

        $category = DB::table('categories')->where('id',$id)->first();

        return view('category.view_category', compact('category'));
    }

    public function delete_category($id) {

        $category = DB::table('categories')->where('id',$id)->delete();

        return redirect()->back()->with('message', 'Category delete!');
        
    }

    public function edit_category($id) {

        $category = DB::table('categories')->where('id',$id)->first();

        return view('category.edit_category', compact('category'));

    }

    public function update_category( Request $req, $id) {
   // print_r($req->category_name);

        $validatedData = $req->validate([
            'name' => 'max:25|min:4',
            'slug' => 'required',
            ]);
        
        $data = array();
        $data['name'] = $req->category_name;
        $data['slug'] = $req->slug;



        $category = DB::table('categories')->where('id',$id)->update($data);

        return redirect()->route('add_category')->with('message', 'Category updated!');
        // return response()->json($data);
        // print_r($req->input());

    }


  

}
