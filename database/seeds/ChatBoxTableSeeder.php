<?php

use Illuminate\Database\Seeder;

class ChatBoxTableSeeder extends Seeder
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
                   'messege' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                   'is_viewed' => true,
                   'created_at' => date('Y-m-d H:i:s'),
                   'updated_at' => date('Y-m-d H:i:s'),
               ];
               $position++;
           }
             DB::table('ChatBox')->insert($list);
       }
    }
}
