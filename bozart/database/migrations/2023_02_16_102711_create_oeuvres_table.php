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
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('artiste_id')->index('artiste_id');
            $table->foreign('artiste_id')->references('id')->on('artistes')->onDelete('cascade');

            $table->unsignedBigInteger('categorie_id')->index('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('titre');
            $table->string('image');
            $table->text('description');
            $table->integer('largeur');
            $table->integer('longeur');
            $table->boolean('actif')->default(0);
            $table->integer('nombre_exemplaire')->default(1);
            $table->date('date_recent')->nullable();
            $table->decimal('prix',10,2);
            $table->integer('appreciation')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres', function (Blueprint $table){
            $table->dropForeign('oeuvres_artiste_id_foreign');
            $table->dropForeign('oeuvres_categorie_id_foreign');
        });
    }
};
