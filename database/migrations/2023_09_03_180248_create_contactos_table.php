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
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',250);
            $table->string('apellidos',250);
            $table->string('email',255)->nullable();
            $table->string('tel',20)->nullable();
            $table->string('empresa',250)->nullable();
            $table->string('asunto',250)->nullable();
            $table->longText('mensaje')->nullable();
            $table->timestamps();
            /*
            $table->id();
            $table->timestamps();
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
