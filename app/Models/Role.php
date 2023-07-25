<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function users():BelongsToMany{
        // Respetando la convencion de Laravel
        return $this->belongsToMany(User::class)->withPivot('added_by');
        // No respetando la convencion de Laravel
        // return $this->belongsToMany(User::class,'role_user','user_id','role_id')->withPivot('added_by');
    }

    //relacion a traves (Trough) de:
    public function sim():HasOne{
        return $this->hasOne(Sim::class);
    }

}

