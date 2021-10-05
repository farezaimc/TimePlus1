<html>

<head>
	<?php
	date_default_timezone_set('Asia/Jakarta');
	?>
	<title>EXPERIMENT3</title>
</head>

<body>
	
<h1>EXPERIMENT KE-3</h1>


<form method="post">
	<input type="time" name="date1" id="date1">
	<button name="submit">SUBMIT</button>
</form>

<?php
echo "TIME NOW :"."\n";
echo date('h:i:s');
echo "</br>"."</br>";
?>

<label for="result">PROGRAM JAM PLUS 1DETIK</label>
</br>
<textarea id="result">
	<?php
	if(isset($_POST['submit'])){
	$date1 = $_POST['date1'];

$number = 1;
$date = date('s');

while($number <= 1){
	if($number > 0){
		$number++;
		echo $date1.":".$date+1;
	}else{
		echo "error!";
	}
}
}

	?>
</textarea>

</body>

</html>
