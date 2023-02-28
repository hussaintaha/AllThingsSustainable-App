<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AppController@Dashboard')->middleware(['auth.shopify'])->name('home');
Route::get('/dashboard','AppController@Dashboard');
Route::post('/Delete','AppController@Delete');
Route::post('/Delete2','AppController@Delete2');
Route::get('/removeImage','AppController@removeImage');
Route::get('/vendors','AppController@Vendors');
Route::get('/vendor_list','AppController@VendorsList');
Route::get('/getStates','AppController@States');
// Route::get('/getServerSide','AppController@getServerSide');
Route::post('getServerSide', 'AppController@getServerSide')->name('getServerSide');
Route::post('getMainCategoryList', 'AppController@getMainCategoryList')->name('getCategoryList');

Route::get('/Test','SearchController@Test');



Route::get('/add_influencer','AppController@add_influencer');
Route::get('/influencer_list','AppController@influencer_list');
Route::post('/AddInfluencerPost','AppController@AddInfluencerPost');

Route::get('/edit-vendor','AppController@EditVendor');
Route::get('/edit-vendor2','AppController@EditVendor2');
Route::get('/edit_influencer','AppController@edit_influencer');
Route::post('/SaveCategory','AppController@SaveCategory');
Route::post('/SaveVendorDetails2','AppController@SaveVendorDetails2');
Route::post('/SaveVendorDetails','AppController@SaveVendorDetails');
Route::post('/uploadPreview','AppController@uploadPreview');
Route::get('/changestatus','AppController@changestatus');



//// StoreFront Routes
Route::get('/landing-page','StoreFrontController@VendorsList');
Route::get('/vendor_details','StoreFrontController@VendorDetails');
Route::post('/SaveReview','StoreFrontController@SaveReview');
Route::post('/SendEmail','StoreFrontController@SendEmail');
Route::get('category/{any}', 'StoreFrontController@CatData');
Route::get('add-to-wishlist', 'StoreFrontController@SaveWishList');
Route::get('user-wishlist', 'StoreFrontController@UserWishList');
Route::get('vendors-by-state/{any}', 'StoreFrontController@VendorsByState');
Route::post('state-vendors-filter', 'StoreFrontController@FilterVendorByState');


Route::post('get-vendors', 'StoreFrontController@getVendors');
Route::get('/Test','StoreFrontController@TestEmail');
Route::get('/search-state','SearchController@SearchStates');
Route::get('/search-with-state-and-category','SearchController@SearchByBoth');
Route::get('/new-vendor-form','AppController@NewVendorForm');
