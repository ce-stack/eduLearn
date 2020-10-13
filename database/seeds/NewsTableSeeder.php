<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    factory(App\News::class, 5)->create();

        $newsCount = (int)$this->command->ask('how many news would you like' , 20);
        $users = App\User::all();

        factory(App\News::class, $newsCount)->make()->each(function($news) use ($users) {
            $news->user_id = $users->random()->id;
            $news->save();
        });
    }
}
