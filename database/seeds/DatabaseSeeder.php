<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $this->call([
            UsersTableSeeder::class,  
            EventsTableSeeder::class,
            CoursesTableSeeder::class,
            TeachersTableSeeder::class,
            UserCourseSeeder::class,
            CommentsTableSeeder::class,
            NewsTableSeeder::class,
            AboutSeeder::class,
            UsersTableSeeder::class,
            LessonTableSeeder::class,
            CourseLessonTableSeeder::class
        ]);
    }
}