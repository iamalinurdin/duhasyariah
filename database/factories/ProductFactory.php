<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'name' => $this->faker->sentence(6, true),
      'code' => "FA{$this->faker->numberBetween(1000, 9999)}",
      'price' => $this->faker->numberBetween(10000, 100000),
      'quantity' => $this->faker->numberBetween(5, 10),
      'photo' => 'https://placeimg.com/200/200/tech'
    ];
  }
}
