<?php
/* Smarty version 4.3.4, created on 2025-01-11 22:51:54
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\OrderDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6782e7fad61039_80768417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36085f434210dfc3f3594eb29ee6218e7be9a53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\OrderDetail.tpl',
      1 => 1736632313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6782e7fad61039_80768417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15916127486782e7fad55151_51648817', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_15916127486782e7fad55151_51648817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15916127486782e7fad55151_51648817',
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
              
                    <input type="submit" class="button primary" value="Anulowanie zamowienia"/>
   
                 
              
         </form>

   
    
   
    <?php
}
}
/* {/block "content"} */
}
