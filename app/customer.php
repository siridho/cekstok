<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customer';
     use SoftDeletes;
       protected $dates = ['deleted_at'];

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'kode_customer';
    public $incrementing = false;
    public $timestamps = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_customer', 'nama_perusahaan', 'nama_customer', 'npwp', 'alamat_kantor', 'provinsi', 'kota', 'kode_pos', 'email', 'notelp_1', 'notelp_2'];

    
}
