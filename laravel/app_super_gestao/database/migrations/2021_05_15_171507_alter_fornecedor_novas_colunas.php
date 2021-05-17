<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedorNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('email',150);
            $table->string('nome',50);
            $table->string('uf',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedors', function (Blueprint $table) {
            //$table->dropColumn('email')
            //$table->dropColumn('nome')
            //$table->dropColumn('uf')
            $table->dropColumn(['nome','email','uf']);
        });
    }
}
