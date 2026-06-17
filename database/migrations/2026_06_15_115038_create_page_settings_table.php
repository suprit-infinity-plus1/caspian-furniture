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
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('canonical_url')->nullable();
            $table->text('schema_markup')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('page_name')->default('Global Settings');
            $table->string('whatsapp_number')->nullable();
            $table->text('whatsapp_message')->nullable();
            $table->json('social_media_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_settings');
    }
};
