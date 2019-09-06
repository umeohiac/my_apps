<?php
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

Route::get('/', 'IndexController@index')->name('login');
Route::post('/assign_fees', 'FeesController@assign_fees_to_school')->name('assign_fee');
Route::post('/fee_types', 'FeesController@create_fee_types')->name('fee_types');
Route::post('/assign_awards', 'AwardsController@assign_awards_to_school')->name('assign_awards');
Route::post('/user_review', 'ReviewsController@user_review')->name('user_review');
Route::post('/new_rating_name', 'ReviewsController@create_new_rating_name')->name('new_rating_name');
Route::post('/register_school', 'SchoolsController@register_school')->name('register_school');
Route::post('/school_uniforms', 'SchoolsController@assign_uniform_to_school')->name('school_uniform');
Route::post('/school_types', 'SchoolsController@store_new_school_type')->name('school_types');
Route::post('/curriculums', 'SchoolsController@store_new_curriculum')->name('curriculum');

Route::post('/login', 'IndexController@login_user')->name('login_user');
Route::post('/signup', 'IndexController@register_user')->name('register');

Route::get('/schools', 'SchoolsController@index');
Route::get('/{id}/schools', 'SchoolsController@view_school_info');

Route::get('/fees', 'FeesController@index');
Route::get('/uniforms', 'SchoolsController@view_school_uniforms');
Route::get('/awards', 'AwardsController@index');
Route::get('/reviews', 'ReviewsController@index');


Route::get('/logout', function(){
    auth()->logout();
    flash()->overlay('You are now logged out', ' ');
    return redirect('/');
});


