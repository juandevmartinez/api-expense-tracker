<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entry::truncate();

        //Calling faker
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++){
            Entry::create([
                'category' => $faker->word,
                'entry_type' => $faker->word,
                'amount'    => $faker->numberBetween($min = 1000, $max = 200000),
                'description'   => $faker->sentence,
            ]);
        }
    }
}
