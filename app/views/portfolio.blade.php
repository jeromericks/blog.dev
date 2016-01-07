@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/portfolio.css">
@stop

@section('content')
	<main>
    	<div class="row">
	    	<h1>Portfolio</h1>
	    	<h3>Positioning</h3>
	    	<a href="/1.4.4._Positioning/css_box_model.html"><img src="positioning.png" alt="Positioning" class="positioning_img"></a>
	    	<div class="specifications hidden-md hidden-s hidden-xs">
		    	<b>Specifications:</b>
		    	<ul>
		    		<li>No line breaks or paragraphs should be used. Use positioning, floats, and clears as appropriate.</li>
		    		<li>Each colored box as a 1 pixel border.</li>
		    		<li>The content area of each box is 50 pixels wide by 50 pixels high.</li>
		    		<li>The overall size of each box is 72 pixels wide by 72 pixels high.</li>
		    		<li>There is 50 pixels of space between the header and the boxes.</li>
		    		<li>There is 50 pixels of space between the boxes themselves.</li>
		    		<li>The Codeup arrow has been added to each box (download image below).</li>
		    	</ul>
		    	<b>Bonus:</b>
		    	<ol>
		    		<li>There are several different ways to move the fourth box to the second line. Research the :nth-child pseudo class and use that to position the second row of boxes.</li>
		    		<li>Rearrange the boxes so that they are in three rows of two. Your HTML should stay the same, and there should only be a small change to your stylesheet.</li>
		    	</ol>
		    	<img src="html_and_css.jpg">
		    	<a href="https://github.com/jeromericks/1.4.4._Positioning" class="btn-social btn-outline" target="blank"><i class="fa fa-lg fa-github"></i></a>
	    	</div>
	    	<h3>Box Model</h3>
	    	<a href="/1.4.3._Box_Model/css_box_model.html"><img src="box_model.png" class="box_model"></a>
	    	<div class="specifications">
	    		<b>Specifications:</b>
	    		<ul>
	    			<li>Each colored box as a 1 pixel border.</li>
	    			<li>The content area of each box is 150 pixels wide by 50 pixels high.</li>
	    			<li>The overall size of each box is 172 pixels wide by 72 pixels high.</li>
	    			<li>The orange box is indented by 30 pixels.</li>
	    			<li>Each subsequent box is indented by 30 more pixels than the previous.</li>
	    			<li>There are 10 pixels of space between the boxes.</li>
	    			<li>The wavelength text is bold.</li>
	    			<li>The header should link to the wikipedia article on the specified subject.</li>
	    		</ul>
	    		<img src="html_and_css.jpg">
	    		<a href="https://github.com/jeromericks/1.4.4._Positioning" class="btn-social btn-outline" target="blank"><i class="fa fa-lg fa-github"></i></a>
	    	</div>
    	</div>
    </main>
@stop