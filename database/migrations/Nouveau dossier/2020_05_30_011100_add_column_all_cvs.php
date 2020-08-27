<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnAllCvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prenom');
            $table->string('pays');
            $table->string('ville');
            $table->string('adresse');
            $table->string('téléphone');
            //$table->string('compte_bancaire')->default('null');//nullable()
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
            $table->dropColumn('prenom');
            $table->dropColumn('pays');
            $table->dropColumn('ville');
            $table->dropColumn('adresse');
            $table->dropColumn('téléphone');
            //$table->dropColumn('compte_bancaire');
        });
    }
}
