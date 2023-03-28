<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\InvoiceFactory;

class Invoice extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
