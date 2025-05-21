<?php
/* Smarty version 4.3.4, created on 2025-05-21 17:55:28
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\Koszyk_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682df770f3ac55_02468135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d6fbfaa75ead737d3f9ec3b6fad080c13ba575' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\Koszyk_View.tpl',
      1 => 1747842671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682df770f3ac55_02468135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_915118657682df770f29075_76896042', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_915118657682df770f29075_76896042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_915118657682df770f29075_76896042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (($_smarty_tpl->tpl_vars['status']->value == "ok")) {?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RemoveItems" method="post">
<table class="alt mid" style="font-size: 0.8em ;white-space: normal">
    
    <thead>
            <tr>
                 <th>zaznacz</th>
                    
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
                <td style="width: 5%">
                 
                
            <input type="checkbox" id=<?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["id_przedmiot_koszyk"];?>
 value=<?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["id_przedmiot_koszyk"];?>
  name=items[]>
            <label for=<?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["id_przedmiot_koszyk"];?>
></label>
           
                </td>

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
               <nav id="nav"> 
                <a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ZlozZamowienie">Złóż Zamówienie</a>
   
                 <input type="submit" value="usuń zaznaczone" class="button primary" />
              
         </form>
<?php } else { ?>
    <h1>Pusty Koszyk :C</h1>
    
    <?php }?>
    <?php
}
}
/* {/block "content"} */
}
