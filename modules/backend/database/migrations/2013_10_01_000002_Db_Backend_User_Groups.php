<?php

use October\Rain\Database\Updates\Migration;

class DbBackendUserGroups extends Migration
{
    public function up()
    {
        Schema::create('backend_user_groups', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique('name_unique');
            $table->text('permissions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('backend_user_groups');
    }
}
