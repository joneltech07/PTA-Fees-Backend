<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayedStudent extends Model
{
    protected $table = 'payed_students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'or_id',
        'lrn_id',
        'sy_fee_id',
        'sy_discount_id',
    ];
    use HasFactory;
}