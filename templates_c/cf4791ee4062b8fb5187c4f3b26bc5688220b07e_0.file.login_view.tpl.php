<?php
/* Smarty version 3.1.36, created on 2021-01-18 12:45:19
  from 'C:\xampp\htdocs\php_calculators\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600582dfd44341_21127686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4791ee4062b8fb5187c4f3b26bc5688220b07e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\views\\login_view.tpl',
      1 => 1610973584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600582dfd44341_21127686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_713863750600582dfd361a4_89437731', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "login_template.tpl");
}
/* {block 'content'} */
class Block_713863750600582dfd361a4_89437731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_713863750600582dfd361a4_89437731',
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

<?php
}
}
/* {/block 'content'} */
}
