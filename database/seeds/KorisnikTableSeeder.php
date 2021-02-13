<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KorisnikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++) {
            DB::table('korisnik')->insert([
                'ime_prezime' => Str::random(rand(4, 7)),
                'broj_telefona' => '+381 6' . rand(100000, 9999999),
                'email' =>  Str::random(rand(3, 9)) . "." . Str::random(rand(5, 10)) . "@gmail.com",
                'broj_karata' =>  rand(1, 5),
                'let_id' =>  rand(1, 20),
            ]);
        }
    }
}
