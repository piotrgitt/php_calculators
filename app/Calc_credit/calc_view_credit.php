<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
 <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css"  crossorigin="anonymous">
     
</head>
<body>
    
<div style="width: 90%; margin: 1em auto;">  
<div class="pure-controls" style: 2em auto>
    <a href ="<?php echo _APP_ROOT;?>/app/Calc/calc.php" class="pure-button" >Zwykły kalkulator</a>
    
    <a href ="<?php echo _APP_ROOT;?>/app/Security/logout.php" class="pure-button" >Wyloguj</a>
</div>    
    <br><br>
    
    
 
<form class="pure-form pure-form-aligned" action="<?php print(_APP_URL);?>/app/Calc_credit/calc_credit.php" method="get">
        
    
    <legend> Kalkulator kredytowy </legend>
        <fieldset>
        <div class="pure-control-group">
            <label for="aligned-name">Kwota:</label>
            <input type="text" id="id_x" name="kwota" value="<?php out($kwota);?>" placeholder="Wpisz kwotę" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-password">Na ile lat:</label>
            <input type="text" id="id_y" name="lata" value="<?php out($lata);?>" placeholder="Wpisz lata" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-email">Oprocentowanie:</label>
            <input type="text" id="id_z" name="oprocentowanie" value="<?php out($oprocentowanie);?>" placeholder="%" />
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>

 
<?php

//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages) && (count($messages) > 0)) {
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
	foreach ( $messages as $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php 

if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF; width:300px;">
<?php print 'Miesięczna rata kredytu:  '. round($result,2)." PLN";?>
</div>
<?php } ?>

<?php if (isset($total_cost)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF; width:300px;">
<?php print 'Całkowity koszt kredytu: '. round($total_cost,2)." PLN";  print 'Całkowity koszt kredytu: '. round($total_cost,2)." PLN";?>
</div>
<?php } ?>
</div>
</body>
</html>