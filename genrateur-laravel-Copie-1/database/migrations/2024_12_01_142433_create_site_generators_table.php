<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('site_generators', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Unnamed Site'); // Valeur par défaut pour le nom du site
            $table->text('site_description')->nullable()->default('No description provided'); // Description par défaut
            $table->string('site_colors')->nullable()->default('default'); // Couleurs du site par défaut
            $table->string('logo_url')->nullable(); // Logo URL, pas de valeur par défaut
            $table->string('contact_email')->nullable()->default('no-reply@domain.com'); // Email de contact par défaut
            $table->string('contact_phone')->nullable()->default('000-000-0000'); // Numéro de téléphone par défaut
            $table->string('address')->nullable()->default('No address provided'); // Adresse du site par défaut
            $table->text('footer_info')->nullable()->default('No footer information'); // Footer par défaut
            $table->enum('template_type', ['template1', 'template2', 'template3'])->nullable()->default('template1');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relation avec User
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_generators');
    }
};
