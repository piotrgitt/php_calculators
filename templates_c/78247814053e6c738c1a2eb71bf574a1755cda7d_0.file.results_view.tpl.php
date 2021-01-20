<?php
/* Smarty version 3.1.36, created on 2021-01-20 19:05:06
  from 'C:\xampp\htdocs\php_calculators\app\views\results_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600870d2cb5c45_53558665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78247814053e6c738c1a2eb71bf574a1755cda7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\views\\results_view.tpl',
      1 => 1611165901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600870d2cb5c45_53558665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009706088600870d2c9d0f5_03036372', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1009706088600870d2c9d0f5_03036372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1009706088600870d2c9d0f5_03036372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Tabela -->
<section>
    <h3>Wynik</h3>
    <div class="table-wrapper">
                <table>
                        <thead>
                                <tr>
                                        <th>ID wyniku</th>
                                        <th>Kwota</th>
                                        <th>Lata</th>
                                        <th>Oprocentowanie</th>
                                        <th>Rata</th>
                                </tr>
                        </thead>
                        <tbody>
                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                   <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["id_wyniku"];?>
</td>
                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data']->value["kwota"]);?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["lata"];?>
</td>
                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data']->value["oprocentowanie"]);?>
%</td>
                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data']->value["rata"]);?>
 PLN</td>
                                    </tr> 
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    

                               
                        </tbody>
                        <tfoot>
                                <tr>
                                        <td colspan="2"></td>
                                </tr>
                        </tfoot>
                </table>
        </div>
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
