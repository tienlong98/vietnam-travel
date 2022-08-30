<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tour_name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = Str::slug($tour_name);
        return [
            'name' => $tour_name,
            'slug' => $slug,
            'short_descripsition' => $this->faker->text(200),
            'descripsition' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10, 500),
            'image' => 'kp' . $this->faker->unique()->numberBetween(1, 12) . '.jpg',
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
