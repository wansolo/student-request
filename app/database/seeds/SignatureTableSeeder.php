<?php

class SignatureTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();DB::table('signatures')->delete();

		Signature::create(array(
			'name'     	=> 			'Alex K. Wiafe (Mr.)'
			
			
		));
		
	}

}