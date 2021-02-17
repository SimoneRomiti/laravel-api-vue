<?php

use Illuminate\Database\Seeder;
use App\Quote;
use Faker\Generator as Faker;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $quote = new Quote();
            $quote->title = $faker->words(3, true);
            $quote->subtitle = $faker->sentences(3, true);
            $quote->text = $faker->text(500);
            $quote->author = $faker->name();
            $quote->save();
        }
    }
}
