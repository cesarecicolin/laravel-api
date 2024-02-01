<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecks = ['laravel','php', 'vite','js','vue'];
        foreach ($tecks as $teck){
            $newTeck = new Technology();
            $newTeck->name = $teck;
            $newTeck->slug = Str::slug($teck);
            $newTeck->save();

        }
    }
}
