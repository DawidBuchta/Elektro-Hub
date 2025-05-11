<?php
/* Smarty version 4.3.4, created on 2025-05-11 16:56:46
  from 'C:\xampp\htdocs\Projekt_systemu\Elektro-hub\app\views\Przedmiot_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6820baae3ae422_89858584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506390427dc537f8ccf3c66a0498787a16ba191c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_systemu\\Elektro-hub\\app\\views\\Przedmiot_View.tpl',
      1 => 1746974871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6820baae3ae422_89858584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <!-- image -->
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17289252646820baae39c1a4_88538151', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10709713666820baae3acf60_50244146', "Wiadomosci");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_17289252646820baae39c1a4_88538151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17289252646820baae39c1a4_88538151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<section>
        <h3>Produkt</h3>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    
                        <div class="col-4 col-6-xsmall ">
                            <a>
                            <span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/JPG/<?php echo $_smarty_tpl->tpl_vars['zdjecie']->value;?>
" alt=<?php echo $_smarty_tpl->tpl_vars['zdjecie']->value;?>
 /></span>
                            <p class="tekst-srodek"> <?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["Nazwa"];?>
</p>
                            </a> 
                        </div>
                            <div class="col-1">       
                            <?php if (((isset($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"])))) {?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"] == "Klient") {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DodanoDoKoszykaPrzedmiot_View&id=<?php echo $_smarty_tpl->tpl_vars['id_przedmiot']->value;?>
" class= "icon solid alt fa-cart-plus fa-4x" ></a>  
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
RemoveItem&id=<?php echo $_smarty_tpl->tpl_vars['id_przedmiot']->value;?>
" class= "icon solid alt fa-trash-alt fa-4x" ></a>  
                                 <?php }?>
                                 <?php } else { ?>
                                                                <?php }?>
                             <br></br>
                            <b> <p class="tekst-srodek">cena:<?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["cena"];?>
</p></b>
                        </div>
                             <div class="col-7 col-6-xsmall ">    
                                 
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['atrybuty']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                     <p class="tekst-srodek"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['nazwa_atrybutu'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['wartosc'];?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                         
                         <div class="col-12 ">    
                                 
                                 
                            <p class="tekst-srodek"><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["opis"];?>
</p>
                         
                        </div>
                     
                

                </div>
        </div>

</section>
<?php
}
}
/* {/block "content"} */
/* {block "Wiadomosci"} */
class Block_10709713666820baae3acf60_50244146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_10709713666820baae3acf60_50244146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     
  <?php if (((isset($_smarty_tpl->tpl_vars['msg']->value)))) {?> 
 <div class=" inf" >
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

 </div>
<?php }?>
  

 
<?php
}
}
/* {/block "Wiadomosci"} */
}
