<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('excelStudents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('student_number',25)->nullable();
			$table->string('first_name', 25)->nullable();
			$table->string('last_name', 25)->nullable();
			$table->string('middle_name', 25)->nullable();
			$table->string('gender', 25)->nullable();
			$table->integer('level')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('program',25)->nullable();
			$table->string('nss',25)->nullable();
			$table->string('first_major',200)->nullable();
			$table->string('second_major',200)->nullable();
			$table->string('flag', 25);
			$table->string('receipt_number')->nullable();
			$table->string('combination_type')->nullable();

			$table->string('course1',200)->nullable();
			$table->string('course2',200)->nullable();
			$table->string('course3',200)->nullable();
			$table->string('course4',200)->nullable();
			$table->string('course5',200)->nullable();
			
			$table->integer('copy')->nullable();
			$table->string('type')->nullable();
			$table->date('date')->nullable();
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
		Schema::drop('excelStudents');
	}

}
