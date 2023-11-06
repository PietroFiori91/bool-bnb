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
        Schema::table('apartments', function (Blueprint $table) {
            $table->unsignedBigInteger("message_id")->nullable()->after("id");
            $table->foreign("message_id")
            ->references("id")
            ->on("messages")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->dropForeign("apartments_message_id_foreign");
            $table->dropColumn("message_id");
        });
    }
};
