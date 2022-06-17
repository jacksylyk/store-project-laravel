<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount(){
        if (!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }else{return $this->price;}

    }
}
