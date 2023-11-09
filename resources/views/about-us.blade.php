@extends('layouts.layout')
@section('css')
<link rel = "stylesheet" href = "{{asset('assets/css/about-us.css')}}">
@endsection
@section('main')
<section class = "hero-about-us">
	<div class = "heading-about-us">
		<h1>About Us</h1>
	</div>
	<div class = "container-About-us">
		<div class = "hero-content-about-us">
			<h2>Information</h2>
			<p>
			Opened in 2021, Woza Woza Kota Place was made with the goal
            of giving as many young students around the Midrand area the
            chance of being able to buy fresh kotas full of taste and that
			will allow you to enjoy your day whether you going, already at or
            coming back from school. Ceejay and his team come together every day
			to provide the best service possible to the youth at the best possible
			price for you to enjoy.  Located on 10 Ridge Road, across Little Cafe and next to Chuks,
            in the two years since opening, the business has grown to become
            one of the main kota and chillout locations for students in the area.
            Be sure to stop around and get your kota ASAP.
			</p>
			<button class = "cta-button">Learn More</button>
		</div>
		<div class = "hero-image">
			<img src = "{{asset('assets/img/Woza-Woza-Kota-Logo.png')}}">
		</div>
	</div>
<section>
@endsection            

