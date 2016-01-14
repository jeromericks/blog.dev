<?php

class PostTableSeeder extends Seeder
{
	public function run()
	{
		$user = User::firstOrFail();

		$post = new Post();
		$post->user_id = $user->id;
		$post->title = 'Hi';
		$post->description = 'Hi';
		$post->save();

		$post2 = new Post();
		$post2->user_id = $user->id;
		$post2->title = 'Hello';
		$post2->description = 'Hello';
		$post2->save();

		$post3 = new Post();
		$post3->user_id = $user->id;
		$post3->title = 'Bye';
		$post3->description = 'Bye';
		$post3->save();
	}
}