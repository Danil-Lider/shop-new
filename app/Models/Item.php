<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name',
        'image',
        'model',
        'link_youtube',
        'status',
        // 'genre',
        // 'genre',
    ];

    // protected $guarded= ['link_youtube'];
}
