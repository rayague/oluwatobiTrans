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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->date('dateTrans');
            $table->longText('descTrans');
            $table->string('origine');
            $table->string('destination');
            $table->string('typeTransit');
            $table->string('quantite');
            $table->string('valeur');
            $table->string('moyenTransit');
            $table->string('numSuivi')->nullable();
            $table->boolean('status')->default(true);
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
