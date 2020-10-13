<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  factory(App\User::class)->states('amir')->create();
        factory(App\User::class, 8)->create();
    }
}
