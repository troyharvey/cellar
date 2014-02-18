<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFormulaTable extends Migration
{

    public function up()
    {
        Schema::table('user_formula', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('formula_id');
        });
    }

    public function down()
    {
        Schema::drop('user_formula');
    }
}
