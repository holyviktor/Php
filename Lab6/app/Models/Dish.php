<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
}
