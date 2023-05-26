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
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('logo')->nullable();
            $table->string('biographie')->nullable();
            $table->string('page_facebook')->nullable();
            $table->string('page_twitter')->nullable();
            $table->string('page_instagram')->nullable();
            $table->string('numero_whatsapp')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistes', function(Blueprint $table){
            $table->dropForeign('artistes_user_id_foreign');
        });
    }
};
