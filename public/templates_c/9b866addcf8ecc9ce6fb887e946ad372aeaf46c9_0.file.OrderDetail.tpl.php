<?php
/* Smarty version 4.3.4, created on 2025-05-21 19:16:17
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\OrderDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682e0a61638876_40986834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b866addcf8ecc9ce6fb887e946ad372aeaf46c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\OrderDetail.tpl',
      1 => 1747847772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682e0a61638876_40986834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467239463682e0a6162b596_66008819', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1467239463682e0a6162b596_66008819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1467239463682e0a6162b596_66008819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
OrderCancel&id=<?php echo $_smarty_tpl->tpl_vars['koszyk']->value[0]["id_zamowienia"];?>
" method="post">
<table class="alt mid" style="font-size: 0.8em ;white-space: normal">
    
    <thead>
            <tr>
                
                    
                    <th>Nazwa</th>
                    <th>Ilosc</th>
                    <th>Cena za szt.</th>
                    <th>Cena łączna</th>
            </tr>
    </thead>
    <tbody>
    
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['koszyk']->value, 'przedmiot', false, NULL, 'row', array (
));
$_smarty_tpl->tpl_vars['przedmiot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['przedmiot']->value) {
$_smarty_tpl->tpl_vars['przedmiot']->do_else = false;
?>
 
            <tr>
                

              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["nazwa"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["ilosc"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["cena"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["cena_razem"];?>
</td>
              

                         
                    
            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
    
    <p><b>Razem: <?php echo $_smarty_tpl->tpl_vars['razem']->value;?>
 PLN<b><p>
              
                    <?php if (($_smarty_tpl->tpl_vars['status']->value == 3)) {?>
                    <input type="submit" class="button primary" value="Anulowanie zamowienia"/>
                    <?php }?>
                 
              
         </form>

   
    
   
    <?php
}
}
/* {/block "content"} */
}
