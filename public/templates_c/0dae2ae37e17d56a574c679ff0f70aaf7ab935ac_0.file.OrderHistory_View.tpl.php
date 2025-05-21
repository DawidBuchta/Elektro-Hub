<?php
/* Smarty version 4.3.4, created on 2025-05-21 17:55:30
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\OrderHistory_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682df772e33902_57280042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dae2ae37e17d56a574c679ff0f70aaf7ab935ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\OrderHistory_View.tpl',
      1 => 1747842671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682df772e33902_57280042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1916479630682df772e26ef1_78977799', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1916479630682df772e26ef1_78977799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1916479630682df772e26ef1_78977799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (($_smarty_tpl->tpl_vars['status']->value == "ok")) {?>
    
<table class="alt mid" style="font-size: 0.8em ;white-space: normal">
    
    <thead>
            <tr>
                 <th></th>
                    
                    <th>Status</th>
                    <th>Data Złozenia Zamówienia</th>
                    <th>Cena Zamówienia</th>

            </tr>
    </thead>
    <tbody>
    
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zamowienia']->value, 'przedmiot', false, NULL, 'row', array (
));
$_smarty_tpl->tpl_vars['przedmiot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['przedmiot']->value) {
$_smarty_tpl->tpl_vars['przedmiot']->do_else = false;
?>
 
            <tr>
                <td style="width: 5%">
                 
                
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
OrderDetail_View&id=<?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["id_zamowienia"];?>
"> Szczegóły zamówienia</a>
           
                </td>

              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["status_zamowienia"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["data_zlozenia_zam"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["cena_laczna"];?>
</td>
              

                         
                    
            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
    
<?php } else { ?>
    <h1>Brak zamówień :C</h1>
    
    <?php }?>
    <?php
}
}
/* {/block "content"} */
}
