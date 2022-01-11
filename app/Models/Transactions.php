<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
    protected $guarded = [];

    public function transactionToCustomer() {
        return $this->belongsTo(Customers::class, 'id_customer', 'id_customer');
    }
    public function transactionToDetail() {
        return $this->belongsTo(Details::class, 'id_transaction', 'id_transaction');
    }
}
