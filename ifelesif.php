<!DOCTYPE html>
<html>
<head>
<title>php</title>
</head>
<body>
<?php
$t=date("H");
if ($t <"10") {
	echo "good morning";
}
elseif($t <"18") {
	echo "good evening";
}
else{
	echo "good night";
}
?>
</body>
</html>