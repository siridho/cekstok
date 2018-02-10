<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class notaJual extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nota_jual';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nomor';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomor', 'tanggal', 'no_po', 'tanggal_po', 'tanggal_pengiriman', 'diantar_oleh', 'jatuh_tempo', 'alamat', 'provinsi', 'kode_pos', 'down_payment', 'grand_total', 'terbilang', 'kode_customer'];

    
}
