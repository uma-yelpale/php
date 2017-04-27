<!DOCTYPE html>
	<html>
	<head>
     <title>php</title>
	</head>
	<body>
    <?Php
    $x=12;
    $y=13;
    $z;
     function mytest()
     {
     	# code...
        global $x,$y,$z;
        $z=$x+$y;;
     	
     }
     mytest();
        echo $z;
    ?>
</body>
</html>