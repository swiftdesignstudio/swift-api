<?php
/*
|--------------------------------------------------------------------------
| Blog API Routes
|--------------------------------------------------------------------------
*/


Route::get('/blog', 'Swiftdesign\Swift\Blog\BlogController@getBlogMain');
Route::get('/blog/{user_key}/single/{post_id}','Swiftdesign\Swift\Blog\BlogController@getBlogSingle');
Route::get('/blog/category/{category}','Swiftdesign\Swift\Blog\BlogController@getBlogsCategory');
