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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->enum('genre',['homme','femme']);
            $table->integer('telephone')->unique();
            $table->integer('nationalite')->->nullable()
            $table->string('email')->unique();
            $table->date('date_de_naissanse')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('actif')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type',['root','admin','artiste','user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
