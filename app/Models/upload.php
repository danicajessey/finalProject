<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_CV', 'image_flazz_card', 'image_ID_card'
    ];
}
