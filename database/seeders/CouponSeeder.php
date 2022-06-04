<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'FA111',
            'discount' => 10,
            'type' => 'percent'
        ]);

        Coupon::create([
            'code' => 'FA222',
            'discount' => 50000,
            'type' => 'currency'
        ]);

        Coupon::create([
            'code' => 'FA333',
            'discount' => 6,
            'type' => 'percent'
        ]);

        Coupon::create([
            'code' => 'FA444',
            'discount' => 5,
            'type' => 'percent'
        ]);
    }
}
