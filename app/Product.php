<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filable = [
        'name', 'image', 'price', 'description','usuario_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,"usuario_id","id");
    }
}
