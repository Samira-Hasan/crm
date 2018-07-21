<?php

use Illuminate\Database\Seeder;

class BrowserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Browser')->insert([
            [
                'name' => 'Chrome',
                
            ],
            [
                'name' => 'IE',
                
            ],
            
            [
                'name' => 'FireFox',
                
            ],
            [
                'name' => 'Safari',
                
            ],
            [
                'name' => 'Opera',
                
            ],
            [
                'name' => 'Navigator',
                
            ]
        ]);  
    }
}
