<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Signature extends Eloquent {

	protected $table = 'signatures';
	protected $primaryKey = 'id';
	protected $fillable = ['name'];

    

}
