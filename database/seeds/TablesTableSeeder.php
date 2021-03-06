<?php

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
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
                   'Task' => 'Update software',
                   'Progress' => '',
                   'Label' => mt_rand(30, 100),
                   'created_at' => date('Y-m-d H:i:s'),
                   'updated_at' => date('Y-m-d H:i:s'),
               ];
               $position++;
           }
             DB::table('Tables')->insert($list);
       }
    }
}

