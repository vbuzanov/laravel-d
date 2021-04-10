<?php

namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'consumer_id',
        'password',
        'avatar',
        'confirmed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserRolesAttribute()
    {
        return $this->roles->pluck('slug')->join(',');
    }

    public function getAvatarAttribute($value)
    {
        return $value ? $value : '/images/no-image.png';
    }

    public function consumer()
    {
        return $this->belongsTo(Consumer::class, 'consumer_id', 'id', 'id');
        //модель, название столбца с внешним ключом, название столбца текущей модели, название столбца связанной модели
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
