<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $table= 'menu';
    public $fillable=[
        'id',
        'title',
        'link',
        'status',
        'author',

    ];
}
