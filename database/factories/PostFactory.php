<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateTrans' => $this->faker->date(),
            'descTrans' => $this->faker->sentence(),
            'origine' => $this->faker->city,
            'destination' => $this->faker->city,
            'typeTransit' => $this->faker->word,
            'quantite' => $this->faker->numberBetween(1, 100),
            'valeur' => $this->faker->randomFloat(2, 10, 1000),
            'moyenTransit' => $this->faker->word,
            'numSuivi' => $this->faker->uuid,
            'status' => true,
            'images' => 'public/images/example.jpg', // Remplacez par un chemin réel si nécessaire
        ];
    }
}