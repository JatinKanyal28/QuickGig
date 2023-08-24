<!DOCTYPE html>
<html lanf='en'>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,inital-scale=1.0">
	<title>Cookie Work</title>
</head>
<body>
		<h1>We work on cookies part with help of cookies values</h1>

		<?php

		$cookie_name="Jatin";
		$cookie_value = "My name is Jatin Kanyal";

		setcookie($cookie_name,$cookie_value,time() - (8460*60*60));

		// setcookie(name,value,time,domain,httponly,security,path);

		if(isset($_COOKIE[$cookie_name])) {
			echo "Cookie Set Successfully <br>";
			echo "Value of Cookie is ".$_COOKIE[$cookie_name];
		}
		else
		{
			echo "Cookie is not set yet!";
		}
		?>
</body>
</html>