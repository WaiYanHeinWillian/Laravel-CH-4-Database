<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

Route::get('/', function () {

    
    
    return view('blogs',[
        'blogs'=>Blog::all()
    ]);
});

Route::get('/blogs/{blog}',function($id)
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
        
    return view('blog',[
        'blog'=>Blog::findOrFail($id)
    ]);
})->where('blog','[A-z\d\-_]+');
