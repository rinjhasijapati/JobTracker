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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('job_title');
            $table->string('listing_url')->nullable();
            $table->string('job_location')->nullable();
            $table->string('compensation')->nullable();
            $table->string('contract_type')->nullable();
            $table->text('job_description')->nullable();
            $table->string('company_name');
            $table->string('company_website')->nullable();
            $table->text('company_summary')->nullable();
            $table->string('status');
            $table->dateTime('interview_date')->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
