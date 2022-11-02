<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    
    use SoftDeletes;
    
    protected $fillable = [
        'id_user','id_producto'
    ];

    protected $table ="compras";
    
    protected $dates = ['created_at','updated_at'];

    public function facturas()
    {
        return $this->hasMany(Facturas::class,'id');
    }

    public function productos()
    {
        return $this->belongsTo(Productos::class,'id_producto');
    }

    public function usuarios()
    {
        return $this->belongsTo(Users::class,'id_user');
    }
}


