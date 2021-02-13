<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    public $table = 'korisnik';
    public function let()
    {
        return $this->belongsTo('App\Let');
    }
}
