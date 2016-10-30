<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableHistoryLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historylog', function ($table) {
            $table->increments('id');
            $table->string('history_type');
            $table->integer('history_id');
            $table->integer('user_id')->nullable();
            $table->string('key');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->timestamps();

            $table->index(array('history_id', 'history_type'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historylog');
    }
}
