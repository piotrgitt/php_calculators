<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo _APP_ROOT;?>/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo _APP_ROOT;?>/assets/css/noscript.css" /></noscript>
     
</head>
<body class="is-preload">
    
    <div id="page-wrapper"> 
        <!-- Header -->
<!--        <header id="header">
                <h1 id="logo"><a href="<?php echo _APP_ROOT;?>/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                        <ul>
                                <li><a href="<?php echo _APP_ROOT;?>/index.php">Home</a></li>
                        </ul>
                </nav>
        </header>-->

        <!-- Main -->
        <div id="main" class="wrapper style1">
                <div class="container">
                        <header class="major">
                                <h2>Kalkulator kredytowy</h2>
                                <p>Oprocentowanie</p>
                        </header>


        <!-- Form -->
                    <section>
                            <h3>Kalkulator kredytowy</h3>
                            <form action="<?php print(_APP_URL);?>/app/Calc_credit/calc_credit.php" method="GET" >
                                    <div class="row gtr-uniform gtr-50">
                                            <div class="col-6 col-12-xsmall">
                                                    
                                                    <input type="text" id="id_x" name="kwota" value="<?php out($kwota);?>" placeholder="Wpisz kwotę" />
                                            </div>
                                            <div class="col-6 col-12-xsmall">
                                                    <input type="text" id="id_y" name="lata" value="<?php out($lata);?>" placeholder="Wpisz lata" />
                                            </div>
                                        
                                            <div class="col-6 col-12-xsmall">
                                                    <input type="text" id="id_z" name="oprocentowanie" value="<?php out($oprocentowanie);?>" placeholder="%" />
                                            </div>

                                            <div class="col-12">
                                                    <ul class="actions">
                                                            <li><input type="submit" value="Oblicz" class="primary" /></li>
                                                    </ul>
                                            </div>
                                    </div>
                            </form>
                    </section>
                    
         <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:300px; color:black;font-weight: bold; ">
                    <!-- Messages -->       
                    <?php
//wyświeltenie listy błędów, jeśli istnieją
                    
                    if (isset($messages)) {
                            if (count ( $messages ) > 0) {
                            echo '<h4 style="color:black; font-weight: bold;">Wystąpiły błędy: </h4>';
                            echo '<ol class="err">';
                                    foreach ( $messages as $key => $msg ) {
                                            echo '<li>'.$msg.'</li>';
                                    }
                                    echo '</ol>';
                            }
                    }
                    ?>
        </div>

                    <!-- Results -->    
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
        </div>
     


    
    
    
    
    
    
    <!-- Footer-->
    <footer id="footer">
	<ul class="icons">
            <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
	</ul>
	<ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>
    </footer>
    </div>
    
    

    
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>