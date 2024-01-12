<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $table = 'fees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fee_type',
        'fee_amount',
        'school_year_id',
    ];
    use HasFactory;
}