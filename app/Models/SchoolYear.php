<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    protected $table = 'school_years';
    protected $primaryKey = 'id';
    protected $fillable = [
        'from_year',
        'to_year',
    ];
    use HasFactory;
}