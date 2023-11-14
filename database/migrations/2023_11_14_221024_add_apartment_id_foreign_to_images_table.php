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
        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger("images_id")->nullable();
            $table->foreign("images_id")
            ->references("id")
            ->on("apartments")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            //
            $table->dropForeignIdFor("images_apartment_id_foreign");
            $table->dropColumn("apartment_id");
        });
    }
};
