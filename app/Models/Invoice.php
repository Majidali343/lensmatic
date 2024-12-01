<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'optician',
        'user_id',
        'invoice',
        'clerk',
        'addornot',
        'GST',
        'PST'
    ];
    
}
