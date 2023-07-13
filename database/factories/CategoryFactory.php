<?php

namespace Database\Factories;

use DragonCode\Support\Facades\Helpers\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->text(8);
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'description' => $this->faker->paragraph,
            'slug' => $slug,
            'priority' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'popular_category' => $this->faker->randomElement([1, 0]),
            'status' => $this->faker->randomElement([1, 0]),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
