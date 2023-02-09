<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => fake() -> unique() -> word(),
            'description' => fake()-> sentence(),
            'mainImage' => fake() -> unique() -> imageUrl(640, 480, 'animals', true),
            'releaseDate' => fake() -> date(),
            'repoLink' => fake() -> unique() -> url(),
           
        ];
    }
}
