<?php

use App\Courses;
use App\User;
use Illuminate\Database\Seeder;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseCount = Courses::all()->count();

        if(0 === $courseCount) {
            $this->command->info('no courses found');
            return;
        }

        $howManyMin = (int)$this->command->ask('how many min courses you want' , 1);

        $howManyMax = min((int)$this->command->ask('how many max courses you want' , $courseCount),$courseCount);


        User::all()->each(function (User $user) use ($howManyMin , $howManyMax){
            $take = random_int($howManyMin , $howManyMax);
            $courses = Courses::inRandomOrder()->take($take)->get()->pluck('id');
            $user->courses()->sync($courses);
        });
    }
}  
