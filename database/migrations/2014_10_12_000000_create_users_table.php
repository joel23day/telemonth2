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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('telefono',10)->nullable();
            $table->string('email',100)->unique();
            $table->enum('cargo',['ADMIN','EMPLEADO'])->default('ADMIN');
            $table->enum('estado',['Active','Locked'])->default('Active');
            $table->timestamp('verificacion_email')->nullable();
            $table->string('password');
            $table->string('image',50)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
