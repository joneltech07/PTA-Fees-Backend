<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    protected $table = 'payment_records';
    protected $primaryKey = 'OR';
    protected $fillable = [
        'date',
    ];
    use HasFactory;
}