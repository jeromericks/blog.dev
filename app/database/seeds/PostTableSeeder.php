<?php

class PostTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post();
		$post->user_id = 1;
		$post->title = 'Hi';
		$post->description = 'Hi';
		$post->save();

		$post2 = new Post();
		$post2->user_id = 1;
		$post2->title = 'Hello';
		$post2->description = 'Hello';
		$post2->save();

		$post3 = new Post();
		$post3->user_id = 1;
		$post3->title = 'Bye';
		$post3->description = 'Bye';
		$post3->save();
	}
}