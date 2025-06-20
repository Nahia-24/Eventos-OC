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
        Schema::table('event_assistants', function (Blueprint $table) {
            $table->boolean('is_paid')->default(false)->after('guardian_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event_assistants', function (Blueprint $table) {
            $table->dropColumn('is_paid');
        });
    }
};
