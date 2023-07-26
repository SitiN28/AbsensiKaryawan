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
        Schema::create('table_administrator', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_adm');
            $table->string('nama',40);
            $table->enum('jk',['L','P']);
            $table->text('alamat');
            $table->primary('id_adm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_administrator');
    }
};
