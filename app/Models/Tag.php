<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function posts():MorphToMany{
//todos los tags relacionados con el post
        return $this->morphByMany(Post::class,'taggable');
    }

    public function videos():MorphToMany{
        //todos los tags relacionados con el video
        return $this->morphByMany(Video::class,'taggable');

    }
}
