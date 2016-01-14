<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->paginate(4);

		return View::make('posts.index', array('posts' => $posts));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

    	// attempt validation
    	if ($validator->fails()) {
        	// validation failed, redirect to the post create page with validation errors and old inputs
        	return Redirect::back()->withInput()->withErrors($validator);
    	} else {
        	// validation succeeded, create and save the post
			$post = new Post();
			
			$post->title = Input::get('title');
			$post->description = Input::get('description');
			$post->user_id = 1;
			$result = $post->save();

			if($result) {
				Session::flash('successMessage', 'Your post successfully saved');
				return Redirect::action('posts.index');
			} else {
				Session::flash('errorMessage', 'Your post wasn\'t saved');
				Log::warning('Post failed to save: ', Input::all());
				return Redirect::back()->withInput();
			}
    	}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}

		return View::make('posts.show', array('post' => $post));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}

		return View::make('posts.edit', array('post' => $post));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

    	// attempt validation
    	if ($validator->fails()) {
        	// validation failed, redirect to the post show page with validation errors and old inputs
        	return Redirect::back()->withInput()->withErrors($validator);
    	} else {
        	// validation succeeded, edit and save the post

			$post->title = Input::get('title');
			$post->description = Input::get('description');
			$result = $post->save();

			if($result) {
				Session::flash('successMessage', 'Your post successfully updated');
				return Redirect::action('posts.index');
			} else {
				Session::flash('errorMessage', 'Your post wasn\'t updated');
				Log::warning('Post failed to update: ', Input::all());
				return Redirect::back()->withInput();
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		Session::flash('successMessage', 'Your post was successfully deleted');
		return Redirect::action('posts.index');
	}


}
