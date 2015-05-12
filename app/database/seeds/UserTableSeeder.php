<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();DB::table('users')->delete();

		User::create(array(
			'first_name'     	=> 			'admin',
			'last_name' 		=> 			'admin',
			'username'    		=> 			'admin',
			'gender'    		=> 			'male',
			'email'    			=> 			'xxx@hotmail.com',
			'password' 			=> 			Hash::make('admin'),
			
		));
		
	}

}