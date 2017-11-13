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
    return redirect('/about');
});

Route::get('/about', function() {
    return 'Hi, This about page';
});

Route::get('/blog', function() {
   $posts = [
     ['id' => '1', 'title' => 'Post 1', 'body' => 'Body post in ID 1'],
       ['id' => '2', 'title' => 'Post 2', 'body' => 'Body post in ID 2'],
       ['id' => '3', 'title' => 'Post 3', 'body' => 'Body post in ID 3'],
       ['id' => '4', 'title' => 'Post 4', 'body' => 'Body post in ID 4'],
   ];

   echo '<ul>';
   foreach ($posts as $post){
       echo '<li> <a href="' . route('post.detail', $post['id']) . '" >' . $post['title'] . ' </a></li>';
   }
   echo '</ul>';
});

Route::get('/post/{id}', ['as' => 'post.detail', function($id)  {
    echo "Post $id";
    echo "</br>";
    echo "Body post in ID $id";
}]);
