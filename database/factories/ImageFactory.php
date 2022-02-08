<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Image::class;

    public function definition()
    {
        $fake_image = [
            'valores.jpg'
        ];
        return [
            //
            'name' => $this->faker->word(),
            'extension' => 'jpg',
            'path' => '../assets/img/'. $this->faker->randomElement($fake_image)


        ];
    }
}
