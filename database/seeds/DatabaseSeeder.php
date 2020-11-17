<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Comment;
use App\Post;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create();
        factory(Post::class, 10)->create();
        factory(Category::class, 5)->create();
        factory(Comment::class, 5)->create();
    }
}
