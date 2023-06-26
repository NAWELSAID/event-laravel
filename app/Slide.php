<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Slide extends Model
{
    use HasFactory;
    protected $fillable = ["photo", "description_fr","titre","button_text","contact_photo"
];
}
