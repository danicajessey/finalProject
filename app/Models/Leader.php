<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'whatsapp', 'birth_place', 'birth_month',
        'birth_date', 'birth_year', 'line_ID', 'github_ID'
    ];
}
