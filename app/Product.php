<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function category()
    {
    //esto pertenece a una categorias -> es lo que quiere decir lo siguiente

    return $this->belongsTo(Category::class);

    }

    public function image()
    {
    //esto tiene muchos Imageenes -> es lo que quiere decir lo siguiente

    return $this->hasMany(ProductImage::class);
    
    }
}
