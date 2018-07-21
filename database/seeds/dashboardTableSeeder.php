<?php

use Illuminate\Database\Seeder;

class dashboardTableSeeder extends Seeder
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
                   'id' => mt_rand(80, 95).$position,
                   'traffic' => mt_rand(80, 95).$position,
                   'likes' => mt_rand(4, 15).$position,
                   'sales' => mt_rand(5, 15).$position,
                   'members' => mt_rand(5, 15).$position
               ];
               $position++;
           }
             DB::table('dashboard')->insert($list);
       }
    }
}
