<?php

class Post extends BaseModel
{
	protected $table = 'posts';

	public static $rules = array(
	    'title'      => 'required|min:2|max:100',
	    'description'       => 'required|min:2|max:10000'
	);

	public function user()
	{
    	return $this->belongsTo('User');
	}
}