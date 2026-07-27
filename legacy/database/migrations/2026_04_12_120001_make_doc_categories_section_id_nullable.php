<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('doc_categories', function (Blueprint $table) {
            $table->dropForeign(['section_id']);
        });

        Schema::table('doc_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('section_id')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('doc_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('section_id')->nullable(false)->change();
        });

        Schema::table('doc_categories', function (Blueprint $table) {
            $table->foreign('section_id')->references('id')->on('doc_sections')->cascadeOnDelete();
        });
    }
};
