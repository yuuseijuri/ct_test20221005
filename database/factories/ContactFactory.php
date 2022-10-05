<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'check_id' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->email(),
            'zip11' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'addr11' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->text(120),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
