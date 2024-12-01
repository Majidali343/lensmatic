<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'items',
        'invoice_id',
        'item_description',
        'qty',
        'price',
        'discount',
        'netprice'
    ];

}
