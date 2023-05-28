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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            
            $table->enum('type', ['house', 'apartment', 'commercial' ,'town home' ,'office & studio' ,'condos' , 'bungalow' , 'farmhouse' ,'tiny house' ,'villa' ,'land' ,'acreage' ,'rural' ,'block of unit' ,'retirement living']);
            $table->enum('isSell', ['sell' ,'rent' ,'soled' ,'on hold'])->default('on hold');
            $table->decimal('price', 10, 2);
            $table->decimal('Bedrooms');
            $table->decimal('bathrooms');
            $table->decimal('rooms');
            $table->integer('size');
            $table->text('description')->nullable();
            // $table->decimal('latitude', 10, 7)->nullable();
            // $table->decimal('longitude', 10, 7)->nullable();
            $table->integer('floor')->nullable();
            $table->string('address')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('country')->nullable()->change()->default('world');
            $table->boolean('isActive')->default(0);
            $table->enum('building_age',['0 - 5 Years', '5 - 10 Years', '10 - 15 Years', '15 - 20 Years', '20+ Years']);
            // $table->string('keywords');
            $table->longText('keywords');
            // garage and parking 
            $table->integer('garage')->default(0);
            $table->integer('parking')->default(0);
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
