<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\VoidType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data');
            $table->time('hora');
            $table->string('buffet');
            $table->text('editor');
            $table->integer('qtd_convidados');
            $table->string('nome');
            $table->integer('idade');
        });
    }

    /**
     * Reverse the migrations.
     * 
     *    @return void
     */

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
