<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('thumbnail');
            $table->string('category')->nullable();;
            $table->string('video_link')->nullable();;
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
