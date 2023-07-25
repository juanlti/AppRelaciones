<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserApiResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function index():View{

        $userOne=User::find(1);
        $user=User::all();
        //$user, contiene todo la informacion de la instancia del modelo User
        //incluyendo los telefenos asociados
        $post=Post::all();
        //return view('index',compact('user','post'));
        return view('index',compact('user','userOne','post'));
    }

}
