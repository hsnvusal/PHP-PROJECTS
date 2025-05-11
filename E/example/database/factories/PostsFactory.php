<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Yazi>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'baslik'=>$this->faker->sentence(),
            'aciklama'=>$this->faker->text(),
            'kategori_id'=>function () {
                return Kategori::all()->random();
            },
            'user_id'=>function () {
                return User::all()->random();
            }

        ];
    }
}
