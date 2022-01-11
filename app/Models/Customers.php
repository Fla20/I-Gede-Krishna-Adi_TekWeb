<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $guarded = [];
    
    public function customerToTransaction() {
        return $this->hasMany(Transactions::class, 'id_customer', 'id_customer');
    }
}
