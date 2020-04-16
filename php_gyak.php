<!DOCTYPE html>
<html>
<head>
	<title>Faszság</title>
</head>
<body>
<form method="post">

	<input type="text" name="num1" readonly value="<?php echo rand(1,10); ?>">
	<input type="text" name="num2" readonly value="<?= rand(1,10) ?>">
	<input type="text" name="result">

<?php

	if (isset($_POST["result"]))
	{
		$num3 = (int)$_POST["num1"] + (int)$_POST["num2"];
		echo 'you typed ' . $_POST['result'];
		echo ' actual result is: ' . $num3;

		if ($num3 == $_POST['result'])
		{
			echo ' got a five from math';
		}

	}else{
		echo 'you wrote nothing';
	}

	/*
		if(isset($_POST["chance"]))
		{
			var_dump($_POST["chance"]);
		}

		$a = 1;
		$b = "hello";
		$c = true;
		$c = 1.34345;

		if ('1' == 1) {
			//true
		}

		if ('1' === 1) {
			//false
		}

		$e = [
		    [1, 'egy', true],
		    [2, 'kettő', false],
		    [3, 'három', true],
		];

		echo '<select name="chance">';
		for ($i=0; $i < count($e); $i++)
		{ 
			echo '<option value="'. $e[$i][0] .'">' . $e[$i][1] . '</option>';
		}
		echo '</select>';
		

		<p> lel </p> 
	*/
?>
	<button type="submit"> küld </button>
</form>
</body>
</html>