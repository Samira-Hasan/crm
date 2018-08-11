<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
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
                    'inventory' => mt_rand(80, 95).$position,
                    'mentions' => mt_rand(4, 15).$position,
                    'downloads' => mt_rand(5, 15).$position,
                    'messages' => mt_rand(5, 15).$position,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $position++;
            }
            DB::table('inventorysystem')->insert($list);
        }
    }

}
