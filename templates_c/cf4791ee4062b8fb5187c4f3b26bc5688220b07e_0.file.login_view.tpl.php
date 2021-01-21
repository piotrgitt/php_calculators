<?php
/* Smarty version 3.1.36, created on 2021-01-21 13:59:41
  from 'C:\xampp\htdocs\php_calculators\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60097abd7ba946_23680711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4791ee4062b8fb5187c4f3b26bc5688220b07e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\views\\login_view.tpl',
      1 => 1611230204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60097abd7ba946_23680711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188650048560097abd7b4874_53573607', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "login_template.tpl");
}
/* {block 'content'} */
class Block_188650048560097abd7b4874_53573607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188650048560097abd7b4874_53573607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Form -->
<section>
    <h3>Zaloguj</h3>
    <form action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
login" method="POST" >
            <div class="row gtr-uniform gtr-50">
                
                    <div class="col-12 col-12-xsmall">
                        <input type="text" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Login" />
                    </div>
                    
                    <div class="col-12 col-12-xsmall">
                        <input type="password" id="pass" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Hasło" />
                    </div>
                    
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>
                        </ul>
                    </div>
                    
            </div>
    </form>
</section>
                   
</br></br>




<?php
}
}
/* {/block 'content'} */
}
