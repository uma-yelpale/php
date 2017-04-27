<!DOCTYPE html>
	<html>
	<head>
     <title>php</title>
	</head>
	<body>
    <?Php
     function mytest($name="xyz",$height=5)
     {
     	# code...
     	echo "uma $name height is $height ft <br>";
     }
     mytest("patil","4");
     mytest();              //default value
     mytest("patil","6");
    ?>
</body>
</html>