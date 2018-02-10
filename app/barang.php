<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'barang';
     use SoftDeletes;
        protected $dates = ['deleted_at'];

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'kode_barang';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_barang', 'nama', 'nomor_izin', 'spesifikasi_khusus', 'asal_negara', 'harga_beli', 'harga_jual', 'gambar_barang', 'kode_supplier', 'kategori_barang', 'merk_barang'];

    
}
