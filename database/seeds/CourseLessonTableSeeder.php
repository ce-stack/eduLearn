<?php

use App\Courses;
use App\Lesson;
use Illuminate\Database\Seeder;

class CourseLessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CoursesCount = Courses::all()->count();

        if(0 === $CoursesCount) {
            $this->command->info('no courses found');
            return;
        }

        $howManyMin = (int)$this->command->ask('how many min lessons you want' ,1);
        $howManyMax = min((int)$this->command->ask('how many max lessons you want' , $CoursesCount),$CoursesCount);


        Lesson::all()->each(function(Lesson $lesson) use ($howManyMin , $howManyMax) {
            $take = random_int($howManyMin , $howManyMax);
            $courses = Lesson::InRandomOrder()->take($take)->get()->pluck('id');
            $lesson->lessons()->sync($courses);
        });
    }
}
