<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [

            'name'=>$faker->name(),
            'email'=>$faker->safeEmail,
            'phone'=> $faker->phoneNumber,
            'rollno'=>$faker->numberBetween(25, 50),
            'branch_name'=>$faker->word,
            'password'=>$faker->password
        ];
    }
}
