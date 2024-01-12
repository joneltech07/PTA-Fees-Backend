<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SYDiscount extends Model
{
    protected $table = 's_y_discounts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sy_id',
        'discount_id',
    ];
    use HasFactory;
}