<html>
<header>
<title>Team Gull</title>
<style>
h1{
	background: #D01031;
	text-align: center;
	padding: 2em;
	}
</style>
</header>
<body>
<h1>Hello World</h1>
</body>
</html>
<?php
	$name = 'Rachana Acharya';
	$greeting = "Hello World!";
	//echo $greeting;
	//echo ' Hello, $name '; // variable can't be used with single quotes
	//echo "Hello, $name"; // variable can be used with double quotes
	echo "Hello, " . $name; //dot means string concatenation
	//echo "Hello, {$name}"; //most common
