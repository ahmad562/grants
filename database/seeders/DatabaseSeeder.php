<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('dentists')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'address1' => $faker->address,
                'address2' => $faker->address,
                'city' => $faker->city,
                'zipcode' => $faker->postcode,
                'state' => $faker->state,
                'phone' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber,
                'website' => $faker->url,
                'email' => $faker->email,
                'title' => $faker->title,
                'dateofbirth' => $faker->date,
                'cellphone' => $faker->phoneNumber,
                'degree' => $faker->word,
                'specialty' => $faker->word,
                'contact_notes' => $faker->sentence,
                'status' => 'Active',
                'created_at' => now(),
                'created_by' => 1,
            ]);
        }
    }
}