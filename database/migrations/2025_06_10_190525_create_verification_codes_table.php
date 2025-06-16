<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('verification_codes')) {
            Schema::create('verification_codes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->string('code', 5);
                $table->timestamp('expires_at');
                $table->timestamps();
                
                $table->index(['user_id', 'code']);
            });
        } else {
            // If table exists, just add missing columns
            Schema::table('verification_codes', function (Blueprint $table) {
                if (!Schema::hasColumn('verification_codes', 'user_id')) {
                    $table->foreignId('user_id')->constrained()->onDelete('cascade');
                }
                if (!Schema::hasColumn('verification_codes', 'code')) {
                    $table->string('code', 5);
                }
                if (!Schema::hasColumn('verification_codes', 'expires_at')) {
                    $table->timestamp('expires_at');
                }
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('verification_codes');
    }
};