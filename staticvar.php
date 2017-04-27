<!DOCTYPE html>
	<html>
	<head>
     <title>php</title>
	</head>
	<body>
    <?Php
     function mytest()
     {
     	# code...
        static $x=5;
     	echo "variable is: $x <br>";
     	$x++;
     }
     mytest();
     mytest();
     mytest()
        
    ?>
</body>
</html>