<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::create([
            'title'=>'Titulo n1',
            'content'=>'Contenido n1'
        ]);
        Post::create([
            'title'=>'Titulo n2',
            'content'=>'Contenido n2'
        ]);




    }
}
