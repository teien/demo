<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('coupons')->insert([
            'coupon_code' => 'CODE123',
            'discount_amount' => 10.00,
            'expiration_date' => '2023-12-31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('coupons')->insert([
            'coupon_code' => 'CODE456',
            'discount_amount' => 20.00,
            'expiration_date' => '2023-12-15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
