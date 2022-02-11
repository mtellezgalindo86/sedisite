<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'slug'  => $this->faker->unique()->slug(),
            'excerpt'  => $this->faker->sentence(),
            'body'  => $this->faker->paragraph(50),
            'user_id' => User::factory(),
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
