<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MonthlyVisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MonthlyVisitor')->insert([
            [
                'month' => 'January',
                'visitor_count' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'month' => 'February',
                'visitor_count' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'month' => 'March',
                'visitor_count' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'month' => 'April',
                'visitor_count' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'month' => 'May',
                'visitor_count' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'month' => 'June',
                'visitor_count' => 30,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'month' => 'July',
                'visitor_count' => 45,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
