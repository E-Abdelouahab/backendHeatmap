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
        Schema::create('mentalome', function (Blueprint $table) {
            $table->id();
            $table->string('gene_ids');
            $table->string('value');
            $table->string('SRA');
            $table->string('Abbreviation');
            $table->string('Expriment');
            $table->string('Disease');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentalome');
    }
};
