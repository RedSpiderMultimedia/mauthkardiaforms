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
        Schema::create('disclosures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->string('ssn');
            $table->string('disclose_name');
            $table->string('disclose_phone');
            $table->string('disclose_address')->nullable();
            $table->string('disclose_fax')->nullable();
            $table->string('releasable_info');
            $table->string('purpose');
            $table->date('expiry_date')->nullable();
            $table->string('signature');
            $table->date('date');
            $table->string('guardian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disclosures');
    }
};
