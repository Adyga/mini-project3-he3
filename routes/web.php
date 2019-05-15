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

Route::get('/', function () {
    return view('layouts/app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user/{user_id}/profile', 'ProfileController@create')->name('profile.create');
Route::get('/user/{user_id}/profile/{profile_id}', 'ProfileController@show')->name('profile.show');
Route::get('/user/{user_id}/profile/{profile_id}/edit', 'ProfileController@edit')->name('profile.edit');
Route::post('/user/{user_id}/profile/', 'ProfileController@store')->name('profile.store');
Route::patch('/user/{user_id}/profile/{profile_id}', 'ProfileController@update')->name('profile.update');
Route::delete('/user/{user_id}/profile/{profile_id}', 'ProfileController@destroy')->name('profile.destroy');

Route::resources([
    'questions' => 'QuestionController',
]);

Route::get('/questions/{question_id}/answers/create', 'AnswerController@create')->name('answers.create');
Route::get('/questions/{question_id}/answers/{answer_id}', 'AnswerController@show')->name('answers.show');
Route::get('/questions/{question_id}/answers/{answer_id}/edit', 'AnswerController@edit')->name('answers.edit');
Route::post('/questions/{question_id}/answers/', 'AnswerController@store')->name('answers.store');
Route::patch('/questions/{question_id}/answer/{answer_id}', 'AnswerController@update')->name('answers.update');
Route::delete('/questions/{question_id}/answer/{answer_id}', 'AnswerController@destroy')->name('answers.destroy');

Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/detailblog', 'BlogController@detailblog')->name('detailblog');

Route::get('/wineblog', 'BlogController@wineblog')->name('wineblog');
Route::get('/coffeeblog', 'BlogController@coffeeblog')->name('coffeeblog');
Route::get('/offtheroadblog', 'BlogController@offtheroadblog')->name('offtheroadblog');
Route::get('/architectureblog', 'BlogController@architectureblog')->name('architectureblog');
Route::get('/photoappblog', 'BlogController@photoappblog')->name('photoappblog');
Route::get('/photographyblog', 'BlogController@photographyblog')->name('photographyblog');

Route::get('/userlibrary', 'LibrariesController@userLibraries')->name('libraryusers');
Route::get('/new_library', 'LibrariesController@create')->name('library/create');
Route::post('/new_library', 'LibrariesController@store');
Route::get('my_library', 'LibrariesController@libraryusers')->name('library/edit');
Route::get('libraries/{library_id}', 'LibrariesController@show')->name('library/show');
Route::post('comment', 'CommentsController@postComment');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('librarys', 'LibrariesController@index');
    Route::post('close_library/{library_id}', 'LibrariesController@close');
});

//Route::resources([
//    'categories' => 'CategoryController',
//]);


Route::get('/categories/create', 'CategoryController@create')->name('library/addcategory');
Route::post('/categories/create', 'CategoryController@store');
