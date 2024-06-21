<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Front End Routes
Route::get('/', 'FrontEndController@home')->name('website');

Route::get('/{slug}', 'FrontEndController@property')->name('website.property');

Route::get('send_enquiry_home/{slug}', 'EnquiryController@sendEnquiryHome')->name('send_enquiry_home');

Route::get('send_enquiry/{slug}', 'EnquiryController@sendEnquiry')->name('send_enquiry');

Route::get('send_hero_enquiry/{slug}', 'EnquiryController@sendHeroEnquiry')->name('send_hero_enquiry');

Route::get('send_bottom_enquiry/{slug}', 'EnquiryController@sendBottomEnquiry')->name('send_bottom_enquiry');





// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::resource('category', 'CategoryController');

    Route::resource('property', 'PropertyController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('amenity', 'AmenityController');
    Route::resource('enquiry', 'EnquiryController');



    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');
    
    // setting
    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');

    
});
