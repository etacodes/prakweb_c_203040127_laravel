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

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Ericko Timur Apandi",
        "email" => "erickotimur2002@gmail.com",
        "image" => "oke.jpeg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ericko Timur Apandi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum incidunt porro nulla nostrum optio delectus, 
        temporibus repellat magni unde esse aspernatur quaerat reiciendis at tenetur quos similique modi et sequi totam suscipit! Ut magnam 
        mollitia error, odio ratione deserunt dignissimos nulla aspernatur aliquam aperiam quas! Quibusdam cumque recusandae explicabo sed vitae 
        animi, sequi quo soluta eum quidem ut aut eligendi eveniet perferendis laborum harum quod nobis
        inventore. Alias explicabo accusamus praesentium quos? Quaerat quidem dolor nesciunt officia facere quisquam."
        ],
    
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Renandra Rahadian Putri",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum incidunt porro nulla nostrum optio delectus, 
        temporibus repellat magni unde esse aspernatur quaerat reiciendis at tenetur quos similique modi et sequi totam suscipit! Ut magnam 
        mollitia error, odio ratione deserunt dignissimos nulla aspernatur aliquam aperiam quas! Quibusdam cumque recusandae explicabo sed vitae 
        animi, sequi quo soluta eum quidem ut aut eligendi eveniet perferendis laborum harum quod nobis
        inventore. Alias explicabo accusamus praesentium quos? Quaerat quidem dolor nesciunt officia facere quisquam."
        ], 
            
        ];

    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//Halaman single route

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ericko Timur Apandi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum incidunt porro nulla nostrum optio delectus, 
        temporibus repellat magni unde esse aspernatur quaerat reiciendis at tenetur quos similique modi et sequi totam suscipit! Ut magnam 
        mollitia error, odio ratione deserunt dignissimos nulla aspernatur aliquam aperiam quas! Quibusdam cumque recusandae explicabo sed vitae 
        animi, sequi quo soluta eum quidem ut aut eligendi eveniet perferendis laborum harum quod nobis
        inventore. Alias explicabo accusamus praesentium quos? Quaerat quidem dolor nesciunt officia facere quisquam."
        ],
    
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Renandra Rahadian Putri",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum incidunt porro nulla nostrum optio delectus, 
        temporibus repellat magni unde esse aspernatur quaerat reiciendis at tenetur quos similique modi et sequi totam suscipit! Ut magnam 
        mollitia error, odio ratione deserunt dignissimos nulla aspernatur aliquam aperiam quas! Quibusdam cumque recusandae explicabo sed vitae 
        animi, sequi quo soluta eum quidem ut aut eligendi eveniet perferendis laborum harum quod nobis
        inventore. Alias explicabo accusamus praesentium quos? Quaerat quidem dolor nesciunt officia facere quisquam."
        ], 
            
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});