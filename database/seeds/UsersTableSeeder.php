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
        DB::table('users')->insert([
            'First_Name' => str_random(10),
            'Last_Name' => str_random(10),
            'Phone' => str_random(10),
            'Twitter' => str_random(10),
            'FaceBook' => str_random(10),
            'Google_plus' => str_random(10),
            'email' => str_random(10).'s@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
