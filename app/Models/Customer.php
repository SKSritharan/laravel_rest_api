<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CustomerFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'type',
        'address',
        'city',
        'state',
        'postal_code',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
