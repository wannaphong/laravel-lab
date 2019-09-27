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
            $table->increments('member_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nick_name');
            $table->string('phone');
            $table->text('email');
            $table->text('img_url');
            $table->integer('year');
            $table->integer('gen_id');
            $table->integer('school_id');
            $table->integer('region_id');
            $table->integer('edu_status');
            $table->integer('graduate_id');
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
