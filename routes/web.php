<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function () {
//     return view('blog');
// });
Route::get('/blog', 'BlogController@index');
Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/aboutus', 'CategoryController@about')->name('about');

Route::get('/addCategory', 'CategoryController@add_category')->name('add_category');

Route::post('/insertCategory', 'CategoryController@insert_category')->name('insert_category');

Route::get('view/category/{id}', 'CategoryController@view_category');
Route::get('delete/category/{id}', 'CategoryController@delete_category');
Route::get('edit/category/{id}', 'CategoryController@edit_category');
Route::post('update/category/{id}', 'CategoryController@update_category');

// Post Crd
Route::get('/addPost', 'PostController@add_post')->name('add_post');
Route::post('insert_post', 'PostController@insert_post');
Route::get('delete/post/{id}', 'PostController@delete_post');
Route::get('edit/post/{id}', 'PostController@edit_post');
Route::get('view/post/{id}', 'PostController@view_post');
Route::post('update_post', 'PostController@update_post');

// Student CRUD
Route::get('/add_student', 'StudentController@add_student')->name('add_student');
Route::post('/insert_student', 'StudentController@insert_student');
Route::get('delete/student/{id}', 'StudentController@delete_student');
Route::get('view/student/{id}', 'StudentController@view_student');
Route::get('edit/student/{id}', 'StudentController@edit_student');
Route::post('update_student/{id}', 'StudentController@update_student');

//Eloquent ORM relationship
Route::get('customers','CustomerController@index')->name('customers');

Route::get('all_customers','CustomerController@all_customers')->name('all_customers');

Route::get('phones', 'PhoneController@index')->name('phones');
Route::get('customer_posts', 'CustomerController@customer_posts')->name('customer_posts');
Route::get('all_posts', 'CustomerPostController@index')->name('all_posts');




