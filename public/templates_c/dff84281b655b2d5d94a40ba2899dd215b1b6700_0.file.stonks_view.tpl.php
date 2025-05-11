<?php
/* Smarty version 4.3.4, created on 2025-01-08 21:02:11
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\stonks_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_677ed9c392c7d1_14017888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dff84281b655b2d5d94a40ba2899dd215b1b6700' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\stonks_view.tpl',
      1 => 1736366530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677ed9c392c7d1_14017888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159333105677ed9c3928cd4_66909976', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1159333105677ed9c3928cd4_66909976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1159333105677ed9c3928cd4_66909976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
    
    <H1 class="tekst-srodek" >DZIEKUJEMY ZA ZŁOŻENIE ZAMÓWIENIA</h1>
    <br>
    
    <img  class="center" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/JPG/like.png"></img>
    
    
<?php
}
}
/* {/block "content"} */
}
