<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_01_21',
        'price_02_21',
        'price_03_21',
        'price_04_21',
        'price_05_21',
        'price_06_21',
        'price_07_21',
        'price_08_21',
        'price_09_21',
        'price_10_21',
        'price_11_21',
        'price_12_21',
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class, 'consumer_id', 'id', 'id');
        //модель, название столбца с внешним ключом, название столбца текущей модели, название столбца связанной модели
    }
}
