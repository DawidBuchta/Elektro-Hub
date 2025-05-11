<?php
/* Smarty version 4.3.4, created on 2025-01-12 11:36:27
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\Oferta_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67839b2bf349a2_54636979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c12d13f59f5f919f8849239b1fd5068f002b90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\Oferta_View.tpl',
      1 => 1736678116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67839b2bf349a2_54636979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <!-- image -->
 
  
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153924055867839b2bf16d21_28059436', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172269373567839b2bf2f7b9_72453848', "Wiadomosci_top");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_153924055867839b2bf16d21_28059436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_153924055867839b2bf16d21_28059436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<section>
        <h3>Produkty</h3>
        <h4>Wszystkie</h4>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['przedmiot']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                       
                        <div class="col-3 col-4-medium col-6-xsmall" >
                             <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Przedmiot&id=<?php echo $_smarty_tpl->tpl_vars['item']->value["id_przedmiot"];?>
"> 
                                <span class="image fit">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/JPG/<?php echo $_smarty_tpl->tpl_vars['item']->value["wartosc"];?>
" alt=<?php echo $_smarty_tpl->tpl_vars['item']->value["wartosc"];?>
 />
                                </span>
                                <?php if (((isset($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"])))) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"] == "Klient") {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DodanoDoKoszykaOferta_View&id=<?php echo $_smarty_tpl->tpl_vars['item']->value["id_przedmiot"];?>
" class= "icon solid alt fa-cart-plus fa-2x center" ></a>  
                                   
                                     <?php } else { ?>

                                    <?php }?>
                                    <?php } else { ?>
                                         <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DodanoDoKoszykaOferta_View&id=<?php echo $_smarty_tpl->tpl_vars['item']->value["id_przedmiot"];?>
" class= "icon solid alt fa-cart-plus fa-2x center" ></a> 
                                <?php }?> 
                                 </a>
                                <p  class="tekst-srodek"><?php echo $_smarty_tpl->tpl_vars['item']->value["nazwa_producenta"];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value["nazwa"];?>
</p>
                          
                            <p class="tekst-srodek">cena: <?php echo $_smarty_tpl->tpl_vars['item']->value["cena"];?>
 PLN</p>
                        </div>
                        
                     
                     
                     
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
        </div>

</section>
<?php
}
}
/* {/block "content"} */
/* {block "Wiadomosci_top"} */
class Block_172269373567839b2bf2f7b9_72453848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci_top' => 
  array (
    0 => 'Block_172269373567839b2bf2f7b9_72453848',
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
