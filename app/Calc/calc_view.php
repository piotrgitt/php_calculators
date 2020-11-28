<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
 <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" crossorigin="anonymous">


</head>
<body>

<form class="pure-form pure-form-aligned"  action="<?php print(_APP_URL);?>/app/Calc/calc.php" method="get" style="margin-bottom: 50px">
        
        <fieldset>
        <div class="pure-control-group">
            <label for="aligned-name">Liczba 1:</label>
            <input id="id_x" type="text" name="x" value="<?php if(isset($x)){print($x);}?>" placeholder="Wpisz liczbę" />
        </div>
            
            
        <div class="pure-control-group">
            <label style="margin-left:10px "> </label>
            <select name="op">
                    <option value="plus" <?php if(isset($operation)){if($operation == "plus")echo "selected";} ?>>+</option>
                    <option value="minus" <?php if(isset($operation)){if($operation == "minus") echo "selected";} ?>>-</option>
                    <option value="times"<?php if(isset($operation)){if($operation == "times") echo "selected";} ?>>*</option>
                    <option value="div"<?php if(isset($operation)){if($operation == "div") echo "selected";} ?>>/</option>
            </select>
        </div>
            
            
            
            
        <div class="pure-control-group">
            <label for="aligned-name">Liczba 2:</label>
            <input id="id_y" type="text" name="y" value="<?php if(isset($y)){print($y);}?>" placeholder="Wpisz liczbę" /> <br />
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
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>
<br><br>
</body>
</html>