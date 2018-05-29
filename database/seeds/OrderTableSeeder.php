<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'order_id' => str_random(10),
            'receiver_name' => str_random(10).'@gmail.com',
            'receiver_tel' => bcrypt('secret'),
            'receiver_mobile' => str_random(10),
            'receiver_zip' => str_random(10),
            'receiver_zip_address' => str_random(10),
            'receiver_address_detail' => str_random(10),
            'receiver_customs_id' => str_random(10),
            'receiver_delivery_memo' => str_random(10),
            'currency_type' => str_random(10),
            'user_id' => str_random(10),
            'shipper_id' => str_random(10),
            'created_at' => date_create(),
            'updated_at' => date_create()
        ]);
    }
}
