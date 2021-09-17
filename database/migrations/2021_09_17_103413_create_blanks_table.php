<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blanks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('phone_number',30);
            $table->string('company', 50);
            $table->text('message');
            $table->string('files', 50);
            $table->integer('user_id')->unsigned();

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
        Schema::dropIfExists('blanks');
    }
}
