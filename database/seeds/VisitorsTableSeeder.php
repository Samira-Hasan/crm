<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = 0;

        for($i = 0; $i < 100; $i++){
            $list = [];
            for($j = 0; $j <= 1000; $j++){
               $list[] = [
                   'user_id' => mt_rand(1, 15),
                   'country_id' => mt_rand(1, 15),
                   'browser_id' => mt_rand(1, 15),
                   'lon' => mt_rand(1, 54),
                   'lat' => mt_rand(1, 54),
                   'created_at' => date('Y-m-d H:i:s'),
                   'updated_at' => date('Y-m-d H:i:s'),
               ];
               $position++;
           }
             DB::table('Visitors')->insert($list);
       }
    }
}
