<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('level');
            $table->timestamps();
        });

        DB::table('members')->insert([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'level' => 'admin',
        ]);

        DB::table('members')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'level' => 'user',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}