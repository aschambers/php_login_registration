<?php
	session_start();
	echo "howdy, {$_SESSION['first_name']}!";
?>
<html>
<head>
		<title></title>
</head>
<body>
	<a href='process.php'>LOG OFF! </a>;
</body>
</html>
