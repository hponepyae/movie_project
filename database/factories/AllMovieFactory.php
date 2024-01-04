<?php

// database/factories/AllMovieFactory.php

namespace Database\Factories;

use App\Models\AllMovie;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllMovieFactory extends Factory
{
    protected $model = AllMovie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->text,
            'time' => $this->faker->numberBetween(1, 5),
            'rating' => $this->faker->numberBetween(1, 5),
            'image' => $this->faker->imageUrl(),
            'date' => $this->faker->numberBetween(1, 5),
        ];
    }
}
