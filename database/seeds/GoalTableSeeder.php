<?php

use Illuminate\Database\Seeder;

class GoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Goal')->insert([
            [
            'product_id' => 1,
            'amount' => mt_rand(500, 1500),
            'month' => 'January',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'product_id' => 2,
            'amount' => mt_rand(500, 1500),
            'month' => 'February',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'product_id' => 3,
            'amount' => mt_rand(500, 1500),
            'month' => 'March',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'product_id' => 4,
            'amount' => mt_rand(500, 1500),
            'month' => 'April',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'product_id' => 5,
            'amount' => mt_rand(500, 1500),
            'month' => 'May',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'product_id' => 6,
            'amount' => mt_rand(500, 1500),
            'month' => 'June',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ],
        [
            'product_id' => 7,
            'amount' => mt_rand(500, 1500),
            'month' => 'July',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        ]);
    }
}
