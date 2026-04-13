<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('seo_title')->nullable()->after('slug');
            $table->string('meta_description', 512)->nullable()->after('seo_title');
            $table->json('tags')->nullable()->after('meta_description');
            $table->string('alt_text')->nullable()->after('tags');
        });
    }

    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn(['seo_title', 'meta_description', 'tags', 'alt_text']);
        });
    }
};
