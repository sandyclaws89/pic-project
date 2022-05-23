<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    // E' buona pratica mettere dentro la classe del nostro model tutti i dati che utilizzerò con fill nel seeder file. In teoria non funziona il fill se non faccio questo.
    protected $fillable = [
        'name',
        'image',
        'pic_title',
        'description',
        'shoot_place',
        'pic_date',
        'pic_size',
        'type',
        'on_sale',
    ];
}
