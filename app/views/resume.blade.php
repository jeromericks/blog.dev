@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/resume.css">
@stop

@section('content')
	<div class="row">
		<h2>Let's play roll dice</h2>
		<a href="{{{ action('HomeController@showGuess', array(1)) }}}">Guess 1</a>
		<a href="{{{ action('HomeController@showGuess', array(2)) }}}">Guess 2</a>
		<a href="{{{ action('HomeController@showGuess', array(3)) }}}">Guess 3</a>
		<a href="{{{ action('HomeController@showGuess', array(4)) }}}">Guess 4</a>
		<a href="{{{ action('HomeController@showGuess', array(5)) }}}">Guess 5</a>
		<a href="{{{ action('HomeController@showGuess', array(6)) }}}">Guess 6</a>
	</div>
	<div class="row">
		<h1>Jerome Ricks</h1>      
		<h1>Full Stack Web Developer</h1>
		<ul class="list-inline">
			<li>
				<a href="mailto:jeromericks@gmail.com" class="btn-social btn-outline" target="blank"><i class="fa fa-fw fa-envelope"></i></a>
			</li>
            <li>
                <a href="https://www.linkedin.com/pub/jerome-ricks/b2/aa6/784" class="btn-social btn-outline" target="blank"><i class="fa fa-fw fa-linkedin" ></i></a>
            </li>
            <li>
                <a href="https://github.com/jeromericks" class="btn-social btn-outline" target="blank"><i class="fa fa-lg fa-github"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/jerome.ricks" class="btn-social btn-outline" target="blank"><i class="fa fa-fw fa-facebook"></i></a>
            </li>
        </ul>
	</div>
	<div class="row">
		<div class="tech">
    		<h3>Technical Skills</h3>
    			<h5>Programming Languages:</h5>
    			<ul class="techSkills">
    				<li>HTML 5</li>
    				<li>CSS</li>
    				<li>PHP</li>
    				<li>MySQL</li>
    				<li>JavaScript/JQuery</li>
    			</ul>
    			<h5>Programming Frameworks:</h5>
    			<ul class="techSkills">
    				<li>jQuery JavaScript</li>
    				<li>MVC framework</li>
    				<li>Git Github</li>
    				<li>Twitter Bootstrap</li>
    				<li>Laravel PHP framework</li>
    			</ul>
		</div>
		<div class="experience">
    		<h3>Professional Experience</h3>
    			<h5>CodingDojo - San Jose, CA</h5>
    			<em>(March 2015 - June 2015)</em>
    			<h6>Student</h6>
    			<h5>Codeup - San Antonio, TX</h5>
    			<em>(September 2015 - February 2016)</em>
    			<h6>Student</h6>
		</div>
		<div class="education">
    		<h3>Education</h3>
    			<h5>Sam Houston State University - Huntsville, TX <em>(2014)</em></h5>
    			<h6>Field of Study - Business Adminstration and Management</h6>
    			<h5>Zhejiang University - Hangzhou, China <em>(2013-2014)</em></h5>
    			<h6>Field of Study - Chinese Language and Literature</h6>
    			<h5>Blinn College - Bryan, TX <em>(2010-2013)</em></h5>
    			<h6>Field of Study - Business/Commerce</h6>
				<a href="#top"><i class="fa fa-2x fa-arrow-up"></i></a>
		</div>
	</div>
@stop