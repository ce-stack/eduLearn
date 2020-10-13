<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $news = App\News::all();

        $users = App\User::all();
        
        if (0 === $news->count() || 0 === $users->count() ) {
            $this->command->info('There are no news or users, so no comments will be added');
            return;
        }

        $commentsCount = (int)$this->command->ask('How many comments would you like?', 20);

        factory(App\Comments::class, $commentsCount)->make()->each(function($comment) use ( $news , $users) {
            $comment->commentable_id = $news->random()->id;
            $comment->commentable_type = 'App\News';
            $comment->user_id = $users->random()->id;
            $comment->save();
        });


        factory(App\Comments::class, $commentsCount)->make()->each(function($comment) use ($users) {
            $comment->commentable_id = $users->random()->id;
            $comment->commentable_type = 'App\User';
            $comment->user_id = $users->random()->id;
            $comment->save();
        });
    }
}
