<?php

use Illuminate\Database\Seeder;

class ordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ordertable')->insert([
            [
                'Order_id' => 'OR9842',
                'Item' => 'Call of Duty IV',
                'Status' => 'Shipped',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Order_id' => 'OR1848',
                'Item' => 'Samsung Smart TV',
                'Status' => 'Pending',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'Order_id' => 'OR7429',
                'Item' => 'iPhone 6 Plus',
                'Status' => 'Delivered',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Order_id' => 'OR7429',
                'Item' => 'Samsung Smart TV',
                'Status' => 'Processing',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Order_id' => 'OR1848',
                'Item' => 'Samsung Smart TV',
                'Status' => 'Pending',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Order_id' => 'OR7429',
                'Item' => 'iPhone 6 Plus',
                'Status' => 'Delivered',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Order_id' => 'OR9842',
                'Item' => 'iPhone 6 Plus',
                'Status' => 'Delivered',
                'Popularity' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}

