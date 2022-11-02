<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
        
    use SoftDeletes;
    
    protected $fillable = [
        'precio','porcentaje'
    ];

    protected $table ="productos";
    
    protected $dates = ['created_at','updated_at'];

    public function compras()
    {
        return $this->hasMany(Compras::class,'id');
    }
}
