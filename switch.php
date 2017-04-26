<!DOCTYPE html>
<html>
<head>
<title>php</title>
</head>
<body>
<?php
$color="blue";
switch ($color) {
	case 'red':
		echo "my color is red";
		break;
	case 'blue':
		echo "my color is blue";
		break;
	
	default:
		# code...
	echo "my color is yellow";
		break;
}

?>
</body>
</html>