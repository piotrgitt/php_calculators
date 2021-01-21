<?php
/* Smarty version 3.1.36, created on 2021-01-21 13:24:55
  from 'C:\xampp\htdocs\php_calculators\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600972973b1054_32213434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3723ecbaee11184186058ae3db1fdb4a6928188d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\views\\templates\\main.tpl',
      1 => 1611230224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600972973b1054_32213434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/assets/css/noscript.css" /></noscript>
     
</head>
<body class="is-preload">
    
    <!-- Header -->
    <div id="page-wrapper"> 
        <header id="header">
                <h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                        <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
logout">Wyloguj</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
results">Wyniki</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php">Strona główna</a></li>
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
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6780110156009729739e633_36647259', 'content');
?>

                </div>
            </div> 
        </div>
                
                
         <!-- Messages -->       
    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?> 
        <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:300px; color:black;font-weight: bold; ">
        <h4 style="color:black; font-weight: bold;">Wystąpiły błędy: </h4>
        <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
        </div> 
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?> 
        <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #7bf; width:300px; color:black;font-weight: bold; ">
        <h4 style="color:black; font-weight: bold;">INFO: </h4>
        <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
        </div> 
    <?php }?>           
                
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
                <li>&copy; Piotr Herdzina. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
    </div>
     
                
   
    
    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_6780110156009729739e633_36647259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6780110156009729739e633_36647259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
