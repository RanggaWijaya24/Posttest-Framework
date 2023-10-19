<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->randomElement(['Kopi Susu', 'Croissant','Bean Americano','Kopi Hitam']),
            'harga' => fake()->unique()->numberBetween(10000, 80000),
            'jenis' => fake()->randomElement(['Kopi', 'Snack', 'Bean']),
            'supplier'=>fake()->name(),

            'supplier_id' => Supplier::all()->random()->id,
        ];
    }
}
