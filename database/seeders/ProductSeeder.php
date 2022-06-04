<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Product::create([
        'name' => 'Purple Reign FA',
        'price' => 455000,
        'quantity' => 10,
        'photo' => 'https://placeimg.com/200/200/tech',
        'code' => 'FA4532'
    ]);

    Product::create([
        'name' => 'Enchanting Belle',
        'price' => 336000,
        'quantity' => 10,
        'photo' => 'https://placeimg.com/200/200/tech',
        'code' => 'FA3518'
    ]);
  }
}
