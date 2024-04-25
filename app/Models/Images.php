<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    public $fillable=[
        'gallery_id',
        'title',
        'images',
    ];

    public function gallery()
{
    return $this->belongsTo(Gallery::class, 'gallery_id');
}
}
