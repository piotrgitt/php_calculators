<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
 <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css"  crossorigin="anonymous">
     
</head>
<body>

<form class="pure-form pure-form-aligned" action="<?php print(_APP_URL);?>/app/Calc_credit/calc_credit.php" method="get">

        <fieldset>
        <div class="pure-control-group">
            <label for="aligned-name">Kwota:</label>
            <input type="text" id="id_x" name="kwota" value="<?php if(isset($kwota)){print($kwota);}?>" placeholder="Wpisz kwotę" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-password">Na ile lat:</label>
            <input type="text" id="id_y" name="lata" value="<?php if(isset($lata)){print($lata);}?>" placeholder="Wpisz lata" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-email">Oprocentowanie:</label>
            <input type="text" id="id_z" name="oprocentowanie" value="<?php if(isset($oprocentowanie)){print($oprocentowanie);}?>" placeholder="%" />
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
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