<?php
/* Smarty version 4.3.4, created on 2025-01-11 13:30:45
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\AddItem_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67826475ec48b4_12966259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554d4752846c233048909b50d2ebf8a41924af67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\AddItem_View.tpl',
      1 => 1736598643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67826475ec48b4_12966259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15875575267826475eab867_58123866', 'content');
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179070835467826475ebe2c9_80830871', "Wiadomosci");
?>

   
  

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_15875575267826475eab867_58123866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15875575267826475eab867_58123866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    <div >
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
AddItemView" method="post" enctype="multipart/form-data" >
         <div class="row gtr-uniform gtr-50">
  

        <div class="col-6 col-12-small">
            <label for="nazwa">nazwa </label>
            <input id="nazwa" type="text" name="nazwa"  value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->Nazwa;?>
'  placeholder="nazwa"  />
        </div>
        <div class=" col-6 col-12-small " >
         <label for="cena">Cena</label>
        <input id ="cena" type="text" name="cena"  value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->Cena;?>
' placeholder="cena" >
        </div>
        <div class=" col-6 col-12-small " >
         <label for="producent">producent</label>
         <select name ="producent">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->Producent, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                  <option  value=<?php echo $_smarty_tpl->tpl_vars['prod']->value["id_Producenta"];?>
 ><?php echo $_smarty_tpl->tpl_vars['prod']->value["nazwa_producenta"];?>
</option>
                  
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </select>
        </div>
         <div class=" col-6 col-12-small " >
         <label for="kategorie">Kategoria</label>
         <select name ="kategorie">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->Kategoria, 'kat');
$_smarty_tpl->tpl_vars['kat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kat']->value) {
$_smarty_tpl->tpl_vars['kat']->do_else = false;
?>
                  <option  value=<?php echo $_smarty_tpl->tpl_vars['kat']->value["id_Kategori"];?>
 ><?php echo $_smarty_tpl->tpl_vars['kat']->value["nazwa_kategori"];?>
</option>
                  
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </select>
        </div>
          <div class=" col-6 col-12-small " >
         <label for="atrybut">Atrybuty</label>
         <select name ="atrybut">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->Atrybut, 'atr');
$_smarty_tpl->tpl_vars['atr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['atr']->value) {
$_smarty_tpl->tpl_vars['atr']->do_else = false;
?>
                  <option  value=<?php echo $_smarty_tpl->tpl_vars['atr']->value["id_atrybutu"];?>
 ><?php echo $_smarty_tpl->tpl_vars['atr']->value["nazwa_atrybutu"];?>
</option>
                  
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </select>
        </div>
         <div class="col-6 col-12-small">
            <label for="wartosc">wartosc </label>
            <input id="wartosc" type="text" name="wartosc"  value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->Wartosc;?>
'  placeholder="wartosc"  />
        </div>
         <div class="col-12 " >
             <label for="opis">opis </label>
             <textarea id ="opis" type="textbox" name="opis"  placeholder="opis" rows="6"></textarea>
        </div>
         
         <div class="col-12" >
         <label for="Zdjęcie">Zdjęcie główne </label>
         <input type="file" id="file" name="file" >
         </div>
        <div class="col-12">
            <input type="submit" value="Dodaj" class="button primary" />
             
        </div>
    </form>	
    </div>
   </div>
 
<?php
}
}
/* {/block 'content'} */
/* {block "Wiadomosci"} */
class Block_179070835467826475ebe2c9_80830871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_179070835467826475ebe2c9_80830871',
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
/* {/block "Wiadomosci"} */
}
