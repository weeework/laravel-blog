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

Route::get('/blog', 'PostController@index');
// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store', 'PostController@store');

// Route::get('/post/{id}', ['as' => 'post.detail', function($id)  {
//     echo "Post $id";
//     echo "</br>";
//     echo "Body post in ID $id";
// }]);

Route::resource('post', 'PostController');


Route::get('/insert', function () {
    // DB::insert('insert into posts(title, body, user_id) values (?,?,?)', ['Belajar PHP dengan Laravel', 'Laravel the best framework', '1']);
    $data = [
        'title' => 'Disini isian title',
        'body' => 'Isian Body untuk table posts',
        'user_id' => 2
    ];
    DB::table('posts')->insert($data);
    echo "Data berhasil ditambah";
});

Route::get('/read', function () {
    $query = DB::select('select * from posts where id = ?', [1]);
    $query = DB::table('posts')->where('id', 1)->first();
    return var_dump($query);
});

Route::get('/update', function () {
    // $updated = DB::update('update posts set title = "UPdate field title" where id = ?', [1]);
    $data = [
        'title' => 'Isian Title',
        'body' => 'Isian Body baru'
    ];
    $updated = DB::table('posts')->where('id', 1)->update($data);
    return $updated;
});

Route::get('/delete', function () {
    // $delete = DB::delete('delete from posts where id = ?', [1]);
    $delete = DB::table('posts')->where('id', 2)->delete();
    return $delete;
});
