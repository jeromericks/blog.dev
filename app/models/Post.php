<?php

class Post extends Eloquent
{
	protected $table = 'posts';

	public static $rules = array(
	    'title'      => 'required|min:2|max:100',
	    'description'       => 'required|min:2|max:10000'
	);
}