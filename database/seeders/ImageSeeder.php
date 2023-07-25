<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Image::create([
            'url'=>'www.UserImage3.com.ar',
            'imageable_id'=>3,
            'imageable_type'=>'App\Models\User',

        ]);
        Image::create([
            'url'=>'www.UserImage2.com.ar',
            'imageable_id'=>2,
            'imageable_type'=>'App\Models\User',

        ]);
        Image::create([
            'url'=>'www.UserImage1.com.ar',
            'imageable_id'=>1,
            'imageable_type'=>'App\Models\User',

        ]);
        Image::create([
            'url'=>'www.UserImage1.1.com.ar',
            'imageable_id'=>1,
            'imageable_type'=>'App\Models\User',

        ]);
        Image::create([
            'url'=>'www.UserImage1.14com.ar',
            'imageable_id'=>1,
            'imageable_type'=>'App\Models\User',

        ]);


        Image::create([
            'url'=>'www.PostImage2.com.ar',
            'imageable_id'=>2,
            'imageable_type'=>'App\Models\Post',

        ]);
        Image::create([
            'url'=>'www.PostImage1.com.ar',
            'imageable_id'=>1,
            'imageable_type'=>'App\Models\Post',

        ]);



    }
}
