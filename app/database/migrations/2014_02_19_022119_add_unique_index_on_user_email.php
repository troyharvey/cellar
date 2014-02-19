<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueIndexOnUserEmail extends Migration {

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->unique('email');
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropUnique('users_email_unique');
        });
    }
}
