<?php
/* Smarty version 4.3.4, created on 2025-05-21 19:09:38
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\OrderDetailMagazyn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682e08d29f4880_61413693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0036b80301a6fc6669bab50e901dab8d126b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\OrderDetailMagazyn.tpl',
      1 => 1747847376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682e08d29f4880_61413693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1631417642682e08d29e5124_60900169', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1631417642682e08d29e5124_60900169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1631417642682e08d29e5124_60900169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <h1> Dane Klienta </h1>
    
    <table class="alt mid" >
                        <thead>
                <tr>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Kod-Pocztowy</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody >

        



                    <tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>


                            <?php if (($_smarty_tpl->tpl_vars['item']->value != NULL)) {?>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                            <?php } else { ?>
                                <td>brak</td>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
             

            </tbody>
        </table>
 <h1> Koszyk </h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
OrderSend&id=<?php echo $_smarty_tpl->tpl_vars['koszyk']->value[0]["id_zamowienia"];?>
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
              
                    
                    <input type="submit" class="button primary" value="wysłane"/>
                 
              
         </form>

   
    
   
    <?php
}
}
/* {/block "content"} */
}
