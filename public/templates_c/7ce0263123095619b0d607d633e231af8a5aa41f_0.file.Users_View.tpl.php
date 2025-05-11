<?php
/* Smarty version 4.3.4, created on 2025-04-11 21:58:42
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\amelia\app\views\Users_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f97472173ee8_57051647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce0263123095619b0d607d633e231af8a5aa41f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\amelia\\app\\views\\Users_View.tpl',
      1 => 1743623455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Search_View.tpl' => 1,
    'file:pages_view.tpl' => 1,
  ),
),false)) {
function content_67f97472173ee8_57051647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107382518867f97472160e14_64223886', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91529409267f9747216a132_41853834', "Wiadomosci_top");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_107382518867f97472160e14_64223886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107382518867f97472160e14_64223886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  

    <div id="tabela">
        <?php $_smarty_tpl->_subTemplateRender("file:Search_View.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <input oninput="wyslijwartosc('search','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" onkeyup="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages', 'pagess')"  id="search" class ="search" type="text" name="search" placeholder="wyszukaj"  value='<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
'   />

    <div id="pagess">
        <?php $_smarty_tpl->_subTemplateRender("file:pages_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "Wiadomosci_top"} */
class Block_91529409267f9747216a132_41853834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci_top' => 
  array (
    0 => 'Block_91529409267f9747216a132_41853834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li class=" <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>inf<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>err<?php }?>" >
                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php
}
}
/* {/block "Wiadomosci_top"} */
}
