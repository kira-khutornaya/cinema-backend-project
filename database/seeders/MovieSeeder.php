<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => 'Звёздные войны XXIII: Атака клонированных клонов',
            'poster' => 'https://imagebox.cz.osobnosti.cz/tapety-filmu/star-wars-epizoda-II-klony-utoci/T11183.jpg',
            'country' => 'США',
            'duration' => 130,
            'description' => 'Две сотни лет назад малороссийские хутора разоряла шайка нехристей-ляхов во главе с могущественным колдуном.',
        ]);
    }
}
