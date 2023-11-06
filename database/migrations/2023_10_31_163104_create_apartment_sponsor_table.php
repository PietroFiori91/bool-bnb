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
        Schema::create('apartment_sponsor', function (Blueprint $table) {
            $table->id(); //PK ID

            $table->unsignedBigInteger('apartment_id');
            $table->unsignedBigInteger('sponsor_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            //FK
            $table->foreign('apartment_id')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');

            $table->foreign('sponsor_id')
                ->references('id')
                ->on('sponsors')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_sponsor');
    }
};
