<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // если не правильно назавал модель для таблицы
    // protected $table='products';
    // один к многим
    public function images(){
        return $this->hasMany('App\Models\ProductImage');
    }
    // выводим категории
    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
