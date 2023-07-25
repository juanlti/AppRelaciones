<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded=[];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];




    public function phone():HasOne{
        //rel 1:1
        //creo un mensaje para obtener las instancias de su relacion
        // uso de la convencion de Laravel
        return $this->hasOne(Phone::class);
        /*
       NO uso de la convencion de Laravel
       return $this->hasOne(Phone::class,'user_id','id');
        */
    }
    public function phones():HasMany{
        //rel 1:M
        //creo un mensaje para obtener las instancias de su relacion
        // uso de la convencion de Laravel
        return $this->hasMany(Phone::class);
        /*
       NO uso de la convencion de Laravel
       return $this->hasOne(Phone::class,'user_id','id');
        */
    }
    public function roles():BelongsToMany{
        return $this->belongsToMany(Role::class)->withPivot('added_by');

    }

    public function phoneSim():HasOneThrough{
        //el User puede acceder a la sim (a traves del phone)
        // 1 a 1
        //respetamos la convencion de laravel
        return $this->hasOneThrough(Sim::class,Phone::class);
        //NO respetamos la convencion de laravel
        //return $this->hasOneThrough(Sim::class,Phone::class,'sim_id','phone_id','phone_id','user_id');


    }
    public function phoneSims():HasManyThrough{
        //el User puede acceder a la simS (a traves del phone)
        // 1 a M
        //respetamos la convencion de laravel
        return $this->hasManyThrough(Sim::class,Phone::class);
        //NO respetamos la convencion de laravel
        //return $this->hasManyThrough(Sim::class,Phone::class,'sim_id','phone_id','phone_id','user_id');


    }
    /*
    public function image():MorphOne{
        //Respetcamos la convencion de laravel
        //return $this->morphOne(Image::class,'imageable');
        // No respetamos la convencion de laravel
        //return $this->morphOne(Image::class,'imageable','miImageTipoImeable','miImagenIDImeable','miIDTable');
        return $this->morphOne('App\Models\User','imageable');

    }/*
    public function images():MorphMany{
        //Respetcamos la convencion de laravel
        return $this->morphMany(Image::class,'imageable');
        // No respetamos la convencion de laravel
        //return $this->morphOne(Image::class,'imageable','miImageTipoImeable','miImagenIDImeable','miIDTable');


    }
*/
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
