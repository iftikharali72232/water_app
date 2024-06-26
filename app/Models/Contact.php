<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Contact extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        "name",
        "email",
        "subject",
        "message",
        "is_read",
    ];
}
