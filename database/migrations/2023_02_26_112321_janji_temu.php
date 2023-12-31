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
    Schema::create('temu', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nama');
      $table->string('phone');
      $table->string('email');
      $table->date('waktu');
      $table->string('catatan');
      $table->boolean('confirm');
      $table->string('status');
      $table->timestamp('created_at')->useCurrent();
      $table->timestamp('updated_at')->useCurrent();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('temu');
  }
};
