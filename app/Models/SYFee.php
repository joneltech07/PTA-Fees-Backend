<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SYFee extends Model
{
    protected $table = 's_y_fees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sy_id',
        'fee_id',
    ];
    use HasFactory;
}