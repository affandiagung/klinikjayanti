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
    Schema::create('dokter', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nama');
      $table->string('email')->unique();
      $table->string('alamat');
      $table->string('phone')->unique();
      $table->string('foto');
      $table->timestamp('created_at')->useCurrent();;
      $table->timestamp('updated_at')->useCurrent();;
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('dokter');
  }
};
