<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $user = User::factory()->create(
            ['name' => 'Jason Statham']
        );
        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);

//         $user = User::factory()->create();
//
//         $personal = Category::create([
//             'name'=>'Personal',
//             'slug'=>'personal',
//         ]);
//
//        $family = Category::create([
//            'name'=>'Family',
//            'slug'=>'family',
//        ]);
//
//        $work = Category::create([
//            'name'=>'Work',
//            'slug'=>'work',
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-first-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem Ipsum body text wooooohooo</p>',
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem Ipsum body text wooooohooo</p>',
//        ]);


//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
