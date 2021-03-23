<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
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

        $posts = Post::factory()->count(20)->create();

        $users = User::factory()
            ->count(20)
            ->create()
            ->each(function ($user) use ($posts) {
                $user->post()->attach([$posts->random()->id]);
            });

        Comment::factory()
            ->count(20)
            ->make()
            ->each(function ($comment) use ($users, $posts) {
                $comment->user_id = $users->random()->id;
                $comment->post_id = $posts->random()->id;
                $comment->save();
            });

        Like::factory()
            ->count(20)
            ->make()
            ->each(function ($like) use ($users, $posts) {
                $like->user_id = $users->random()->id;
                $like->post_id = $posts->random()->id;
                $like->save();
            });
    }
}
