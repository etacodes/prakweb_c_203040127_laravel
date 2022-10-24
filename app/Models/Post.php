<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "author" => "Ericko Timur Apandi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum incidunt porro nulla nostrum optio delectus, 
        temporibus repellat magni unde esse aspernatur quaerat reiciendis at tenetur quos similique modi et sequi totam suscipit! Ut magnam 
        mollitia error, odio ratione deserunt dignissimos nulla aspernatur aliquam aperiam quas! Quibusdam cumque recusandae explicabo sed vitae 
        animi, sequi quo soluta eum quidem ut aut eligendi eveniet perferendis laborum harum quod nobis
        inventore. Alias explicabo accusamus praesentium quos? Quaerat quidem dolor nesciunt officia facere quisquam."
        ],
    
        [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "author" => "Renandra Rahadian Putri",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum incidunt porro nulla nostrum optio delectus, 
        temporibus repellat magni unde esse aspernatur quaerat reiciendis at tenetur quos similique modi et sequi totam suscipit! Ut magnam 
        mollitia error, odio ratione deserunt dignissimos nulla aspernatur aliquam aperiam quas! Quibusdam cumque recusandae explicabo sed vitae 
        animi, sequi quo soluta eum quidem ut aut eligendi eveniet perferendis laborum harum quod nobis
        inventore. Alias explicabo accusamus praesentium quos? Quaerat quidem dolor nesciunt officia facere quisquam."
        ], 
            
        ];

        public static function all ()
        {
            return collect(self::$blog_posts);
        }

        public static function find ($slug)
        {
            $posts = static::all();
   

    return $posts->firstWhere('slug', $slug);
}

}