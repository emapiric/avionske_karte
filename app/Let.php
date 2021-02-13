<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Let extends Model
{
    public $table = 'let';

    public function korisnici()
    {
        return $this->hasMany('App\Korisnik');
    }
    public function smanjiMesta($broj_karata)
    {
        if ($this->broj_mesta_u_avionu >= $broj_karata) {
            $this->decrement('broj_mesta_u_avionu', $broj_karata);
            return true;
        }
        return false;
    }
}
