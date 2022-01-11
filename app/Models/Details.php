<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $table = 'detail';
    protected $primaryKey = 'id_detail';
    protected $guarded = [];

    public function detailToTransaction() {
        return $this->belongsTo(Transactions::class, 'id_transaction', 'id_transaction');
    }

    public function detailToPaket() {
        return $this->belongsTo(PaketMakanans::class, 'id_paket', 'id_paket');
    }
}
