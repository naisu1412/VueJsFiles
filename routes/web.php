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


/*pag may slash lang ibig sabihin home*/



/*ibig sabihin nung susunod eh yung mga papasok dun*/
/*
Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is user '.$name.' with an id of '.$id;
});

*/
/*
Route::get('/', 'PagesController@Index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/user_id/{user_id}',function($user_id){
    return 'Hello there ' . $user_id;
});

Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is user '.$name.' with an id of '.$id;
});

Route::get('/table',function(){
    for($x=0;$x<5;$x++){
        echo 'hey' . '<br>';            
    }
});

Route::get('/table/{number}',function($number = 2){
    for ($i=0; $i < $number; $i++) { 
        echo '*';
    }
})->where('number','[0-9]+');

*/

Route::resource('post','PagesController');
Route::get('/','PagesController@getIndex');
Route::get('/contact','PagesController@getContact');
Route::get('/about','PagesController@getAbout');


//practicing templating

Route::get('/template','PagesController@getSample');
Route::get('/templateHome','PagesController@getSampleHome');
Route::get('/panel','PagesController@getPanel');
Route::get('/ecommerce','PagesController@getECommerceIndex');



Route::get('/vuePrac', function() {
    return view('vueJS Practice/vueJS Prac 1');
});


//gagamit ka ng resource kung naka resource yung controller yung gawa mo , kung naka CRUD sya
Route::resource('posts', 'PostsController');
