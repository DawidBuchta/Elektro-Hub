<?php
/* Smarty version 4.3.4, created on 2025-05-21 17:53:32
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\Users_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682df6fc9c1ec7_67433394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b4e648d32d32cf8e539f5d5a6eba0cb61250a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\Users_View.tpl',
      1 => 1747842671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Search_View.tpl' => 1,
    'file:pages_view.tpl' => 1,
  ),
),false)) {
function content_682df6fc9c1ec7_67433394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931949560682df6fc9afa79_35577437', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740605658682df6fc9b8705_53535235', "Wiadomosci_top");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_931949560682df6fc9afa79_35577437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_931949560682df6fc9afa79_35577437',
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
class Block_1740605658682df6fc9b8705_53535235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci_top' => 
  array (
    0 => 'Block_1740605658682df6fc9b8705_53535235',
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
