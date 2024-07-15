<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

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

            'first_name' =>faker->name,
            'last_name' =>faker->name,
            'gender' =>faker->numberBetween(1,3),
            'email' =>faker->safeEmail(),
            'tel' =>faker->tel,
            'address' =>faker->address,
            'building' =>faker-text>,
            'detail' =>faker->text,
        ];
    }
}
