<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // To create a relation between an invoice and a customer
    public function customer(){
        return $this->belongsTo(Customer::class); ;
    }
}