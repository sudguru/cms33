<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Qxiioi48aU/getSiteId/{siteUrl}', 'Api\ApiController@getSiteId');

Route::get('/getViewComposer/{lang}/{site}', 'Api\ApiController@getViewComposer');

Route::get('/getHomeData/{w}/{m}/{n}/{lang}/{site}', 'Api\ApiController@getHomeData');


Route::get('/getNavlinks/{lang}/{site}/{menuname}', 'Api\ApiController@getNavlinks');

Route::get('/getHomeSliders/{lang}/{site}', 'Api\ApiController@getHomeSliders');

Route::get('/getNotifications/{notification}/{lang}/{site}', 'Api\ApiController@getNotifications');

Route::get('/getPostBySlug/{slug}/{lang}/{site}', 'Api\ApiController@getPostBySlug');

Route::get('/getFeaturedposts/{lang}/{site}', 'Api\ApiController@getFeaturedposts');

Route::get('/getCategoryPosts/{slug}/{lang}/{site}', 'Api\ApiController@getCategoryPosts');

