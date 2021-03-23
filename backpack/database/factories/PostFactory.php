<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_name' => $this->faker->city,
            'price_life' => $this->faker->numberBetween(1, 5),
            'internet_good' => $this->faker->numberBetween(1, 5),
            'city_save' => $this->faker->numberBetween(1, 5),
            'apartment_easy' => $this->faker->numberBetween(1, 5),
            'amusement' => $this->faker->numberBetween(1, 5),
            'language' => $this->faker->randomElement(['french', 'german', 'english', 'spanish', 'italian']),
            'country' => $this->faker->country,
            'continent' => $this->faker->randomElement(['Africa', 'America', 'Asia', 'Europa',  'Oceania']),
            'description' => $this->faker->sentence(150, true),
            'image_city' => $this->faker->imageUrl(640, 480, 'city', true, 'Faker') 
        ];
    }
}
