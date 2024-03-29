<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    // To create a relation between a customer and invoices
    public function invoices(){
        return $this->hasMany(Invoice::class); ;
    }
}
