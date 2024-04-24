<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
     public $table = 'testimonial';
    protected $fillable=[
        'id',
        'author',
        'image',
        'title',
        'description',
        'position',
        'status'
    ];
}
