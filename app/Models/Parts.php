<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'stock',
        'min_price',
        'max_price',
        'status'
    ];


    public function parts_categories()
    {
        return $this->belongsTo(PartCategory::class);
    }
}
