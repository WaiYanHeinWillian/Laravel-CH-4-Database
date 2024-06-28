
    <!-- <article>
        <h1><a href="/blog">First Blog</a></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus voluptatem accusantium amet non esse eius quos illum vero. Temporibus recusandae doloribus tempore, modi beatae aperiam suscipit laudantium incidunt autem explicabo.
            </p>
    </article> -->
    
<x-layout>
        
    <x-slot name='title'>
        <title>{{$blog->title}}</title>
    </x-slot>
    <h1>{{$blog->title}}</h1>
    <p>{!!$blog->body!!}</p>
    <a href="/">Go Back</a>
</x-layout>

