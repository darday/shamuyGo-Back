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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id('enterprise_id');
            $table->string('enterprise_code');
            $table->string('enterprise_name')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('google_maps')->nullable();
            $table->text('img_logo')->nullable();
            $table->text('city')->nullable();
            $table->text('province')->nullable();
            $table->text('responsable')->nullable();
            $table->text('url_web')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprises');
    }
};
