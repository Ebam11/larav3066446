<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'urlImg']; // Asegúrate que sea 'urlImg'
}
