<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/Calc_credit/calc_credit.php" method="get">
	<label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="kwota" value="<?php if(isset($kwota)){print($kwota);}?>" />
	<br />
	
	<label for="id_y">Na ile lat: </label>
	<input id="id_y" type="text" name="lata" value="<?php if(isset($lata)){print($lata);}?>" />
	<br />
	
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="oprocentowanie" value="<?php if(isset($oprocentowanie)){print($oprocentowanie);}?>" /><br />
	
	
	
	<input type="submit" value="Oblicz ratę kredytu" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
	foreach ( $messages as $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF; width:300px;">
<?php print 'Miesięczna rata kredytu:  '. round($result,2)." PLN";?>
</div>
<?php } ?>

<?php if (isset($total_cost)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF; width:300px;">
<?php print 'Całkowity koszt kredytu: '. round($total_cost,2)." PLN";  print 'Całkowity koszt kredytu: '. round($total_cost,2)." PLN";?>
</div>
<?php } ?>

</body>
</html>