<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    
    public function index() {

    	$phones = Phone::all();
    	return view('customer/phone', compact('phones')); 
    }
    
}
