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
        Schema::create('appreciations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('oeuvre_id')->index('oeuvre_id');
            $table->foreign('oeuvre_id')->references('id')->on('oeuvres')->onDelete('cascade');

            $table->integer('appreciation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appreciations', function (Bluerrint $table){
            $table->dropForeign('appreciations_user_id_foreign');
            $table->dropForeign('appreciations_oeuvre_id_foreign');
        });
    }
};
