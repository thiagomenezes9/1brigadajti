<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('ismedico')->nullable();
            $table->boolean('isengenheiro')->nullable();
            $table->boolean('iscomunicador')->nullable();
            $table->binary('foto')->nullable();
            $table->dateTime('dt_ent')->nullable();
            $table->string('classe');
            $table->string('observacao')->nullable();
            $table->string('nome_guerra');
            $table->string('pforte')->nullable();
            $table->string('pFraco')->nullable();
            $table->string('sexo');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('intagram')->nullable();
            $table->string('arma')->nullable();
            $table->integer('perfil');
            $table->integer('equipe_id')->unsigned()->nullable();

            $table->foreign('equipe_id')->references('id')->on('equipes');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
