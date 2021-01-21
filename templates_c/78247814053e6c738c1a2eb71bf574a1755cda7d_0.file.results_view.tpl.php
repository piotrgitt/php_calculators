<?php
/* Smarty version 3.1.36, created on 2021-01-21 13:59:40
  from 'C:\xampp\htdocs\php_calculators\app\views\results_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60097abc8899b1_61009393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78247814053e6c738c1a2eb71bf574a1755cda7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_calculators\\app\\views\\results_view.tpl',
      1 => 1611230125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60097abc8899b1_61009393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109821291060097abc86b9c9_95491579', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_109821291060097abc86b9c9_95491579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_109821291060097abc86b9c9_95491579',
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
                                        <th>Data i czas</th>
                                </tr>
                        </thead>
                        <tbody>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>    
                                   <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
 </td>
                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data']->value["kwota"]);?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["lata"];?>
</td>
                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data']->value["oprocentowanie"]);?>
%</td>
                                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data']->value["rata"]);?>
 PLN</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["data"];?>
</td>
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





<?php
}
}
/* {/block 'content'} */
}
