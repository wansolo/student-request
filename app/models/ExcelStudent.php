<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ExcelStudent extends Eloquent {

	protected $table = 'excelStudents';
	protected $primaryKey = 'id';
	protected $fillable = ['first_name','last_name' ,'middle_name' ,'gender','email','phone','level','program','student_number','type','combination_type','first_major','second_major','date','receipt_number'];

    

}
