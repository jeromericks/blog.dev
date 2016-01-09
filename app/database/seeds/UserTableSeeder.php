<?php 

class UserTableSeeder extends Seeder
{
	public function run()
	{
		$user = new User();
		$user->first_name = 'Jerome';
		$user->last_name = 'Ricks';
		$user->username = $_ENV['USER_USER'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->birthday = '1991-05-03';
		$user->phone_number = '9999999999';
		$user->zip_code = '78212';
		$user->save();
	}
}