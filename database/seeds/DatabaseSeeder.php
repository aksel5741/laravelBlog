<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call((PostsTableSeeder::class));
        $this->call((CategorysTableSeeders::class));

        $category= App\Category::all();

        App\Post::all()->each(function ($post) use ($category) {
            $post->categories()->attach(
                $category->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
