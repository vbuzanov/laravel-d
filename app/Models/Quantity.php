<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'qty_01_21',
        'qty_02_21',
        'qty_03_21',
        'qty_04_21',
        'qty_05_21',
        'qty_06_21',
        'qty_07_21',
        'qty_08_21',
        'qty_09_21',
        'qty_10_21',
        'qty_11_21',
        'qty_12_21',
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class, 'consumer_id', 'id', 'id');
        //модель, название столбца с внешним ключом, название столбца текущей модели, название столбца связанной модели
    }
}
