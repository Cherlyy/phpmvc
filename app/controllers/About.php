<?php

class About {
	public function index($name = 'Cherly', $occupation = 'student')
	{
		echo "Hello, $name is a $occupation.";
	}
	public function page()
	{
		echo 'About/page';
	}
}