<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    
    <meta charset="utf-8" />
    <title>Kalkulator Logowanie</title>
     <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" crossorigin="anonymous">
</head>
    
<body>


    <div style="width: 90%; margin: 1em auto;">
        <form class="pure-form pure-form-aligned"  action="<?php print(_APP_URL);?>\app\Security\login.php" method="get" style="margin-bottom: 50px">
            <legend> Kalkulator </legend>
                <fieldset>
                <div class="pure-control-group">
                    <label for="aligned-name">Login:</label>
                    <input id="id_login" type="text" name="login" value="<?php out($form['login']);?>" placeholder="Login..." />
                </div>


                <div class="pure-control-group">
                    <label for="aligned-name">Hasło:</label>
                    <input id="id_pass" type="password" name="pass" value="<?php out($form['pass']);?>" placeholder="Hasło..." /> <br />
                </div>

                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
                </div>
            </fieldset>
        </form>	
    </div>



    <div style="width: 90%; margin: 1em auto;">    
    <?php
    //wyświeltenie listy błędów, jeśli istnieją
    if (isset($messages)) {
        if(count($messages)>0){
            echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
            foreach ( $messages as $msg ) {
                    echo '<li>'.$msg.'</li>';
            }


            echo '</ol>';
        }
    }
    ?>
     </div>  

    <br><br>
</body>
</html>