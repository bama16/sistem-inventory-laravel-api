<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class keluar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_keluar';
    protected $fillable = [
        'kode_keluar',
        'nama_product',
        'nama_supplier',
        'name',
        'stock_keluar',
        'tgl_keluar',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'nama_product');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'nama_supplier');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'name');
    }
}
