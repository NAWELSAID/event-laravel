<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Coordinate extends Model
{
    use HasFactory;
    protected $fillable = ["name","portfile","adress","phone","e_mail","motivation_word","logo_footer","logo_dark","logo_light",
                            "facebook","whatsapp","instagrame","twitter","linkedin"
];
}
