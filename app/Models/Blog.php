<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Blog
{
    public $title;
    public $slug;
    public $intro;
    public $body;
    public $date;

    public function __construct($title,$slug,$intro,$body,$date)
    {
        $this->title=$title;
        $this->slug=$slug;
        $this->intro=$intro;
        $this->body=$body;
        $this->date=$date;

    }

    public static function all()
    {
        // $files=File::files(resource_path('blogs'));
        // return array_map(function($file){
        //     return $file->getContents();
        // },$files);
        
        // foreach($files as $file){
        // $obj=YamlFrontMatter::parseFile($file);
        // $blog=new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
        // $blogs[]=$blog;
        // }

        // return array_map(function($file)
        // {
        //     $obj=YamlFrontMatter::parseFile($file);
        //     return new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
            
        // },$files);

        return collect(File::files(resource_path('blogs')))
            ->map(function($file)
            {
                $obj=YamlFrontMatter::parseFile($file);
                return new Blog($obj->title,$obj->slug,$obj->intro,$obj->body(),$obj->date);
            })
            ->sortByDesc('date');   
    }

    public static function find($slug){
        // $path=__DIR__."/../resources/blogs/$slug.html";

        // $path=resource_path("blogs/$slug.html");
        // if(!file_exists($path)){
        //     return redirect('/');
        // }
        // return cache()->remember("posts.$slug", 5, function() use ($path){            
        //     return file_get_contents($path);
        // });

        $blogs=static::all();
        return $blogs->firstWhere('slug',$slug);
        }

        public static function findOrFail($slug){
           
            
            $blog=static::find($slug);
            if(!$blog){
                throw new ModelNotFoundException();
            }
            return $blog;
        }
            
}