<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'regions_stores', 'stores_id', 'regions_id');
    }
}
