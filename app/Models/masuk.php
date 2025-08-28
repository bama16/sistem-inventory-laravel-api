<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class masuk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_masuk';
    protected $fillable = [
        'kode_masuk',
        'nama_product',
        'nama_supplier',
        'name',
        'stock_masuk',
        'tgl_masuk',
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'nama_product');
    }
}
