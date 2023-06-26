<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategorieEvent extends Model
{
    use HasFactory;
    protected $fillable = ["name_fr", "name_an"
];
}
