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
        $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];   	
     }
     mytest();
        echo $z;
    ?>
</body>
</html>