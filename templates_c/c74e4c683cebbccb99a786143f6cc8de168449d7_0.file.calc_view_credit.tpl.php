<?php
/* Smarty version 3.1.36, created on 2021-01-21 13:24:55
  from 'C:\xampp\htdocs\php_calculators\app\views\calc_view_credit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6009729737b489_91317470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74e4c683cebbccb99a786143f6cc8de168449d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\views\\calc_view_credit.tpl',
      1 => 1611230130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009729737b489_91317470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39654310060097297369fa8_26498092', 'content');
?>
    
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_39654310060097297369fa8_26498092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_39654310060097297369fa8_26498092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- Form -->
<section>
    <h3>Kalkulator kredytowy</h3>
    <form action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
process" method="POST" >
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
                    




<!-- Results -->    
<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF;">
    Miesięczna rata kredytu: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['result']->value);?>
 PLN </br>
    Całkowity koszt kredytu: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_cost']->value);?>
 PLN
</div>
<?php }?>   

</br></br>



<?php
}
}
/* {/block 'content'} */
}
