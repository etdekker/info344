<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="REQUEST">
		<input type="text" name="n">
		<br />
		<input type="radio" value="e" name="pick" checked="">Evens
		<input type="radio" value="p" name="pick">Primes
		<br />
		<input type="submit" value="Submit">
	</form>
<?php
	$n = $_REQUEST['n'];
	$pick = $_REQUEST['pick'];
	if($pick == 'e'){
		for ($s=2; $s < $n; $s = $s+2) { 
		echo $s;
		echo "\n";
		}
	}else{//this doesn't work
		for ($i=1; $i < $n; $i++) { 
			for($j=2; $j<$i;$j++) {
        		if($i % $j != 0){
        			echo $i;
        		}
    		}
		}
	}
?>
</body>
</html>
