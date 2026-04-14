<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Widen columns so admin text fields are not capped at 255/512 at the DB layer.
     * Slugs stay varchar(768) so a unique index stays valid under utf8mb4.
     */
    public function up(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->text('title')->change();
            $table->string('slug', 768)->change();
            $table->text('seo_title')->nullable()->change();
            $table->text('meta_description')->nullable()->change();
            $table->text('alt_text')->nullable()->change();
            $table->text('author_name')->nullable()->change();
            $table->text('featured_image')->nullable()->change();
        });

        Schema::table('doc_articles', function (Blueprint $table) {
            $table->text('title')->change();
            $table->string('slug', 768)->change();
        });

        Schema::table('doc_categories', function (Blueprint $table) {
            $table->text('name')->change();
            $table->string('slug', 768)->change();
        });
    }

    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('title')->change();
            $table->string('slug')->change();
            $table->string('seo_title')->nullable()->change();
            $table->string('meta_description', 512)->nullable()->change();
            $table->string('alt_text')->nullable()->change();
            $table->string('author_name')->nullable()->change();
            $table->string('featured_image')->nullable()->change();
        });

        Schema::table('doc_articles', function (Blueprint $table) {
            $table->string('title')->change();
            $table->string('slug')->change();
        });

        Schema::table('doc_categories', function (Blueprint $table) {
            $table->string('name')->change();
            $table->string('slug')->change();
        });
    }
};
