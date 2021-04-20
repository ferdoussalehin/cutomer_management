<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{

	public function index() {

		return view('customer/customer_page');

	}

    public function all_customers() {

    	$customers = Customer::all();

    	/*
    	foreach($customers as $row) {
    		echo "<pre>";
    		print_r($row->phone);
    	}
    	*/
    	// $customers = Customer::find(2)->phone;
    	// return response()->json($customers);

    	return view('customer/customers', compact('customers')); 
    	
    }

    public function customer_posts() {

    	$posts = Customer::all();

    	//return response()->json($posts);
    	return view('customer/customer_posts', compact('posts')); 

    }



}
