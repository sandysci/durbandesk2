<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('requesteremail');
			$table->string('fullname');
			$table->string('subject');
			$table->string('type');
			$table->string('status');
			$table->string('priority');
			$table->string('group');
			$table->integer('agents_id')->unsigned();
			$table->foreign('agents_id')->references('id')->on('agents')->onDelete('cascade');
			$table->text('description');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('tickets');
	}

}
