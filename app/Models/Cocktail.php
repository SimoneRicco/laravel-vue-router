<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class);
    }
}
