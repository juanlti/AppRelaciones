<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');

            //imageable_id=> Indica la clave CF
            //si esta image esta relacionada con Post

            $table->integer('imageable_id');
            //imageable_type => Indica el tipo de modelo relacionado
            //imageable_id => id_user
            $table->string('imageable_type');
            //tipoDeImagen => User
            //$table->primary(['imageable_id','imageable_type']);

            //$table->morphs('imageable');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
