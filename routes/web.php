<?php


// Route::get('/', function () {
//     return view('frontend/pages/index');
// });


/*
|--------------------------------------------------------------------------
| Frontend Controller
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontendController@index');
Route::get('diamond', 'FrontendController@diamond');
Route::get('product_details', 'FrontendController@detail');
Route::get('contact_us', 'FrontendController@contact');
Route::get('wishlist', 'FrontendController@wishlist');



/*
|--------------------------------------------------------------------------
| Backend Controller
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('header', 'HeaderController');
Route::resource('category', 'CategoryController');
Route::resource('sub_category', 'SubCategoryController');
Route::resource('general', 'GeneralController');
Route::resource('service', 'ServiceController');
Route::resource('product', 'ProductController');
Route::resource('top_card', 'TopCardController');
Route::resource('center_card', 'CenterCardController');
Route::resource('testimonial', 'TestimonialController');
Route::resource('new', 'NewArrivalController');


