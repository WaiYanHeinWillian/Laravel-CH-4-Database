<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {

    return view('blogs',[
        // 'blogs'=>Blog::with('category','author')->get() //eager load // lazy loading
        'blogs'=>Blog::latest()->get()
    ]);
});

// Route::get('/blogs/{blog}',function($id)
Route::get('/blogs/{blog:slug}',function(Blog $blog)
{   
    // $slug="second-blog";
    
    // $path=__DIR__."/../resources/blogs/$slug.html";
    // if(!file_exists($path)){
    //     return redirect('/');
    // }

    // $blog=cache()->remember("posts.$slug", 5, function() use ($path){
    //     var_dump('File get contents');
    //     return file_get_contents($path);
    // });

    // $blog=Blog::find($slug);

    // DB::listen(function($query){
    //     Logger($query->sql);
    // });
        
    return view('blog',[
        // 'blog'=>Blog::findOrFail($id)
        'blog'=>$blog,
        'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
    ]);
})->where('blog','[A-z\d\-_]+');


Route::get('/categories/{category:slug}',function(Category $category){
    
    return view('blogs',[
        // 'blogs'=>$category->blogs->load('author','category')
        'blogs'=>$category->blogs
    ]);
});

Route::get('/users/{user:username}',function(User $user){
    
    return view('blogs',[
        // 'blogs'=>$user->blogs->load('author','category')
        'blogs'=>$user->blogs
    ]);
});
