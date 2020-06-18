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

Route::get('/', 'PageController@index')->name("pages.index");
Route::get('/about_us', 'PageController@about_us')->name("pages.about_us");
Route::get('/course_grid_2', 'PageController@course_grid_2')->name("pages.course_grid_2");
Route::get('/course_grid_3', 'PageController@course_grid_3')->name("pages.course_grid_3");
Route::get('/course_grid_4', 'PageController@course_grid_4')->name("pages.course_grid_4");
//Route::get('/blog', 'PageController@blog')->name("pages.blog");
//Route::get('/blog_single', 'PageController@blog_single')->name("pages.blog_single");
Route::get('/blog', 'PostController@index');
Route::get('/contact', 'PageController@contact')->name("pages.contact");
Route::get('/pricing', 'PageController@pricing')->name("pages.pricing");
Route::get('/teachers', 'PageController@teachers')->name("pages.teachers");
//Route::get('/about_us', 'PageController@about_us')->name("pages.about_us");

Route::get('post/', 'PostController@index')->name('post.index');
Route::get('post/show/{id}', 'PostController@show')->name('post.show');
Route::get('create', 'PostController@create')->name('post.create');
Route::post('post/', 'PostController@store')->name('post.store');

Route::group(['prefix' => 'admin'], function () {
    Route::get('posts/create', 'PostVoyager@publish')->name('posts.publish');
    Voyager::routes();
});



Route::get('/home', 'HomeController@index')->name('home');
