<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContentsTable extends Migration
{
    public function up()
    {
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_generator_id')->unique(); // Un seul contenu par site
            $table->json('content'); // On enregistre $data sous forme JSON
            $table->boolean('premium')->default(false); // <-- Champ boolean ajouté ici
            $table->timestamps();

            $table->foreign('site_generator_id')->references('id')->on('site_generators')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_contents');
    }
}
