<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['name',  'description', 'img', 'button_text', 'button_url'];

    // public function getImgAttribute($value)
    // {
    //     return $value ? $value : '/images/no-image.png';
    // }
}
