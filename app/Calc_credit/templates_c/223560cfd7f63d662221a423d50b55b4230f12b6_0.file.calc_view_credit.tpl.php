<?php
/* Smarty version 3.1.36, created on 2021-01-08 23:24:02
  from 'C:\xampp\htdocs\php_calculators\app\Calc_credit\calc_view_credit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff8db82d20b57_18069348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '223560cfd7f63d662221a423d50b55b4230f12b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\Calc_credit\\calc_view_credit.tpl',
      1 => 1610144617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff8db82d20b57_18069348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14379942435ff8db82d110e4_12265131', 'content');
?>
    
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_14379942435ff8db82d110e4_12265131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14379942435ff8db82d110e4_12265131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- Form -->
<section>
    <h3>Kalkulator kredytowy</h3>
    <form action="<?php echo $_smarty_tpl->tpl_vars['approot']->value;?>
/app/Calc_credit/calc_credit.php" method="GET" >
            <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">

                    <input type="text" id="id_x" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
" placeholder="Wpisz kwotę" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                            <input type="text" id="id_y" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['lata']->value;?>
" placeholder="Wpisz lata" />
                    </div>

                    <div class="col-6 col-12-xsmall">
                            <input type="text" id="id_z" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['oprocentowanie']->value;?>
" placeholder="%" />
                    </div>

                    <div class="col-12">
                            <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary" /></li>
                            </ul>
                    </div>
            </div>
    </form>
</section>
                    

<!-- Messages -->       
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?> 
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
        <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:300px; color:black;font-weight: bold; ">
        <h4 style="color:black; font-weight: bold;">Wystąpiły błędy: </h4>
        <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
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
        <?php }
}?>


<!-- Results -->    
<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF; width:300px;">
Miesięczna rata kredytu: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 PLN
</div>
<?php }?>                   


<?php
}
}
/* {/block 'content'} */
}
