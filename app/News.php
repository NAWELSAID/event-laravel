<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;
    protected $fillable = ["titre_fr", "description_fr","photo","date"
];

}
