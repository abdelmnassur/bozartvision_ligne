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
        Schema::create('promos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('artiste_id')->index('artiste_id');
            $table->foreign('artiste_id')->references('id')->on('artistes')->onDelete('cascade');

            $table->decimal('taux',10,2);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos', function (Blueprint $table){
            $table->dropForeign('promos_artiste_id_foreign');
        });

    }
};
