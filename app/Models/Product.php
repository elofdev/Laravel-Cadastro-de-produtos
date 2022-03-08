<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    protected $fillable = [
    'name'
    ];
    
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag','product_id','tag_id');
    }
}
