<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Contact::class;
    public function definition()
    {
        return [
            //
            'name'->$this->faker->name,
            'email' -> $this->faker->email,
            'designation'->$this->faker->text,
          
        ];
    }
}
