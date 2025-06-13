<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Leerling extends Model
{
    use HasFactory;
    protected $table = 'leerlings';
    protected $fillable = [
        'voornaam',
        'achternaam',
        'email',
        'telefoonnummer',
    ];
    //
}
