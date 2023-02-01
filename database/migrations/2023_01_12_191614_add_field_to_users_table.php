<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles')->after('email')->default('USER'); // Menambahkan field pada table yang sudah dibuat
            $table->string('phone')->after('email')->nullable(); // Menambahkan field pada table yang sudah dibuat, default null
            $table->string('username')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles'); // Menambahkan field pada table yang sudah dibuat
            $table->dropColumn('phone'); // Menambahkan field pada table yang sudah dibuat, default null
            $table->dropColumn('username');
        });
    }
};
