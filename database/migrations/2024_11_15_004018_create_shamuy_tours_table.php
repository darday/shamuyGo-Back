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
        Schema::create('shamuy_tours', function (Blueprint $table) {
            $table->id('shamuy_tours_id');
            $table->string('monthly_tour_id');
            $table->string('tour_name');
            $table->string('tour_destiny');
            $table->text('description');
            $table->text('include');
            $table->string('img_1');
            $table->string('img_2');
            $table->boolean('state');
            $table->string('type');
            $table->string('dificulty');
            $table->float('person_cost');
            $table->float('group_cost');
            $table->float('discount')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('messagge_for_contact')->nullable();
            $table->date('departure_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('enterprise_code');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shamuy_tours');
    }
};
