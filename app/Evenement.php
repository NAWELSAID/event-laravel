<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ["title_fr", "description_fr", "photo","date_start","date_end","category"
];


public function categorie (){
    return $this->belongsTo(CategorieEvent::class , "categorie_id" , "id");
}
}
