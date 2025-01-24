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
        Schema::table('surveys', function (Blueprint $table) {

            $table->boolean('visible')->nullable();
            $table->boolean('email_confirmation')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');

 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surveys', function (Blueprint $table) {
            // Elimina las claves foráneas antes de eliminar las columnas
            $table->dropForeign(['created_by']);
            
            // Elimina las columnas agregadas
            $table->dropColumn([
                'visible',
                'email_confirmation',
                'password',
                'created_by',
            ]);
        });
    }
};
