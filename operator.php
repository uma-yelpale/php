<!DOCTYPE html>
	<html>
	<head>
		<title>php</title>
	</head>	
	<body>
		<?php
			$x=12;
			$y=13;
			echo $x+$y;;
			echo "<br>";
			echo $x-$y;
			echo "<br>";
			echo $x*$y;
			echo "<br>";
			echo $x/$y;
			echo "<br>";
			echo $x%$y;
			echo "<br>";
			echo $x**$y;
			echo "<br>";



			echo $x+=$y;
			echo "<br>";
			echo $x-=$y;
			echo "<br>";
			echo $x*=$y;
			echo "<br>";
			echo $x/=$y;
			echo "<br>";
			echo $x%=$y;
			echo "<br>";


			var_dump($x==$y);
			echo "<br>";
			var_dump($x===$y);
			echo "<br>";
			var_dump($x!=$y);
			echo "<br>";
			var_dump($x<>$y);
			echo "<br>";
			var_dump($x<=$y);
			echo "<br>";
			var_dump($x!==$y);
			echo "<br>";
			var_dump($x>=$y);
			echo "<br>";
			var_dump($x<$y);
			echo "<br>";
			var_dump($x>$y);
			echo "<br>";


			echo ++$x;
			echo "<br>";
			echo $y++;
			echo "<br>";
			echo --$y;
			echo "<br>";
			echo $x--;
			echo "<br>";
		?>
	</body>
	</html>