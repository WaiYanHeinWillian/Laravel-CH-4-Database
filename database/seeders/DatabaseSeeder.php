<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Blog::truncate();
        Category::truncate();

        $frontend=Category::factory()->create(['name'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend']);

        // User::factory()->create();
        Blog::factory(2)->create(['category_id'=>$frontend->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $frontend=Category::create([
        //     'name'=>'frontend',
        //     'slug'=>'frontend'
        // ]);
        // $backend=Category::create([
        //     'name'=>'backend',
        //     'slug'=>'backend'
        // ]);

        // Blog::create([
        //     'title'=>'frontend post',
        //     'slug'=>'frontend-post',
        //     'intro'=>'This is intro',
        //     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, facilis saepe illum sit eos dignissimos quasi libero quos necessitatibus magnam nemo fugit reprehenderit qui, perferendis officia nesciunt sint ut animi doloribus quaerat. Debitis odio cum eum voluptatem perferendis fugit explicabo rerum iure minima inventore officiis, ipsam error dolore tempore harum reiciendis enim repudiandae libero sunt, repellat amet, praesentium hic. Itaque id earum quae doloremque sed est pariatur alias cumque temporibus natus distinctio error odio omnis reiciendis asperiores ipsam fugit commodi, sapiente nulla placeat voluptatum. Ab tenetur minima exercitationem esse hic cumque explicabo ex voluptates eligendi aut, odio, distinctio accusamus eveniet.',
        //     'category_id'=>$frontend->id
        // ]);
        // Blog::create([
        //     'title'=>'backend post',
        //     'slug'=>'backend-post',
        //     'intro'=>'This is intro',
        //     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, facilis saepe illum sit eos dignissimos quasi libero quos necessitatibus magnam nemo fugit reprehenderit qui, perferendis officia nesciunt sint ut animi doloribus quaerat. Debitis odio cum eum voluptatem perferendis fugit explicabo rerum iure minima inventore officiis, ipsam error dolore tempore harum reiciendis enim repudiandae libero sunt, repellat amet, praesentium hic. Itaque id earum quae doloremque sed est pariatur alias cumque temporibus natus distinctio error odio omnis reiciendis asperiores ipsam fugit commodi, sapiente nulla placeat voluptatum. Ab tenetur minima exercitationem esse hic cumque explicabo ex voluptates eligendi aut, odio, distinctio accusamus eveniet.',
        //     'category_id'=>$backend->id
        // ]);
    }
}
