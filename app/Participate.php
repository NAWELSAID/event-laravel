<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Participate extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "event_id"
];
}
