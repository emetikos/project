<?php

namespace Database\Factories;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attendance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hap_hash' => $this->faker->sha1,
            'user_hash' => $this->faker->sha1,
            'attended' => $this->faker->boolean,
            'hapData' => $this->faker->sha1,
            'hapName' => $this->faker->name,
            'userName' => $this->faker->firstName,
            'userSurname' => $this->faker->lastName,
            'hapStarted' => $this->faker->date()
        ];
    }
}
