<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketMakanans extends Model
{
    use HasFactory;
    protected $table = 'paket_makanan';
    protected $primaryKey = 'id_paket';
    protected $guarded = [];

    public function paketToDetail() {
        return $this->belongsTo(Details::class, 'id_paket', 'id_paket');
    }
}
