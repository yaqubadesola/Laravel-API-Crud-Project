<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('customers')->insert([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
       }
    }
}
