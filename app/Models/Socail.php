<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socail extends Model
{
    use HasFactory;
    protected $fillable = [
        'social',
        'link'
    ];
}
