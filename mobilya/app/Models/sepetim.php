<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepetim extends Model
{
    use HasFactory;
    public function uruns()
    {
        return $this->hasMany('App\Models\urunler');
    }
}
