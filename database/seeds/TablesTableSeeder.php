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
        DB::table('Tables')->insert([
            [
            'Task' => 'Update software',
            'Progress' => '',
            'Label' => mt_rand(30, 100),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'Task' => 'Clean database',
            'Progress' => '',
            'Label' => mt_rand(30, 100),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'Task' => 'Fix and squish bugs',
            'Progress' => '',
            'Label' => mt_rand(30, 100),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'Task' => 'Cron job',
            'Progress' => '',
            'Label' => mt_rand(30, 100),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'Task' => 'software',
            'Progress' => '',
            'Label' => mt_rand(30, 100),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        ]);
    }
}
