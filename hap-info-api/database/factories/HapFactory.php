<?php

namespace Database\Factories;

use App\Models\Hap;
use Illuminate\Database\Eloquent\Factories\Factory;

class HapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hash' => $this->faker->sha1,
            'module' => $this->faker->name,
            'created' => $this->faker->date
        ];
    }
}
