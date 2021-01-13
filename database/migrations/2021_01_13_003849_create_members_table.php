<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('nama_member');
            $table->string('email');
            $table->string('negara');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('telpon');
            $table->string('alamat');
            $table->string('keluargas');
            $table->longText('path');
            $table->longText('berkas');
            $table->longText('password');
            $table->tinyInteger('verifikasi');
            $table->softDeletes();
            $table->timestamps();
        });
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
