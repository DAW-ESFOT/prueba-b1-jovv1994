<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->creditCardNumber,
            ]);
            $user->genders()->saveMany(
                $faker->randomElements(
                    array(
                        Gender::find(1),
                        Gender::find(2),
                        Gender::find(3)
                    ), $faker->numberBetween(1, 3), false)
            );
        }
    }
}
