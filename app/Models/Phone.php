<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Phone extends Model
{
    use HasFactory;

    protected $guarded=[];



    public function user():BelongsTo{
            //rel 1:1
        // uso de la convencion de Laravel
        return $this->belongsTo(User::class);
    }


}
