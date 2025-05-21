<?php
/* Smarty version 4.3.4, created on 2025-05-21 18:47:50
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\stonks_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682e03b6da5b32_45699920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f147ac766e01929e7f2c2f3e32ef177c89fd04e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\stonks_view.tpl',
      1 => 1747842671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682e03b6da5b32_45699920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_868075962682e03b6da2076_84279562', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_868075962682e03b6da2076_84279562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_868075962682e03b6da2076_84279562',
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
