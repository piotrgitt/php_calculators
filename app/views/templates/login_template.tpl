<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$app_url}/lib/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$app_url}/lib/assets/css/noscript.css" /></noscript>
     
</head>
<body class="is-preload">
    
    <!-- Header -->
    <div id="page-wrapper"> 
        <header id="header">
                <h1 id="logo"><a href="{$app_url}/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                        <ul>
                                <li><a href="{$app_url}/index.php">Home</a></li>
                        </ul>
                </nav>
        </header>

        <!-- Header2 -->
        <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>Kalkulator kredytowy</h2>
                    <p>Oprocentowanie</p>
                </header>


                <!-- content -->    
                <div class="content">
                {block name=content} Domyślna treść zawartości .... {/block}
                </div>
            </div> 
        </div>
                
                
        <!-- Messages -->            
    {if $messages->isError()} 
        <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:300px; color:black;font-weight: bold; ">
        <h4 style="color:black; font-weight: bold;">Wystąpiły błędy: </h4>
        <ol class="err">
                {foreach  $messages->getErrors() as $msg }
                {strip}
                        <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
        </div> 
    {/if}

    {if $messages->isInfo()} 
        <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #7bf; width:300px; color:black;font-weight: bold; ">
        <h4 style="color:black; font-weight: bold;">INFO: </h4>
        <ol class="err">
                {foreach  $messages->getInfos() as $msg }
                {strip}
                        <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
        </div> 
    {/if}        
                
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
                <li>&copy; Piotr Herdz. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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