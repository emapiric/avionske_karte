<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class LetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('let')->insert([
                'pocetna_destinacija' => Str::random(rand(4, 7)),
                'krajnja_destinacija' => Str::random(rand(4, 7)),
                'duzina_leta' =>  rand(1800, 7200) * 10,
                'datum_poletanja' =>  Carbon::today()->addDays(rand(10, 160)),
                'broj_mesta_u_avionu' =>  rand(50, 200),
                'kompanija' =>  Str::random(rand(7, 10)),
            ]);
        }
    }
}
