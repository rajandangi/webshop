<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'name' => fake()->unique()->randomElement(['T-shirt', 'Pants', 'Shoes', 'Hat']),
      'description' => fake()->paragraph(),
      'price' => fake()->numberBetween(5_00, 45_00),
    ];
  }
}
