<?php
/* Smarty version 4.3.4, created on 2025-05-11 16:59:02
  from 'C:\xampp\htdocs\Projekt_systemu\Elektro-hub\app\views\Rejestracja_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6820bb364fd8f4_75999186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29f8ffad938fb13fc681c0e6b93fcdf2af1737d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_systemu\\Elektro-hub\\app\\views\\Rejestracja_view.tpl',
      1 => 1746975477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6820bb364fd8f4_75999186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19675385286820bb364efb42_15375313', 'content');
?>
        
        
        
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5263115296820bb364f5a63_29986184', "Wiadomosci");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19675385286820bb364efb42_15375313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19675385286820bb364efb42_15375313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    <div >
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Zarejestruj" method="post" >
         <div class="row gtr-uniform gtr-50">
  

        <div class="col-6 col-12-small">
            <label for="login">Login </label>
            <input id="login" type="text" name="login"  value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
'  placeholder="Login"  />
        </div>
        <div class=" col-6 col-12-small " >
             <label for="password">Haslo </label>
        <input id ="password" type="text" name="password"  placeholder="Hasło" >
        </div>
        <div class=" col-6 col-12-small " >
         <label for="imie">Imie</label>
        <input id ="imie" type="text" name="imie" value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
'  placeholder="Imie" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="nazwisko">Nazwisko</label>
        <input id ="nazwisko" type="text" name="nazwisko"  value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
' placeholder="Nazwisko" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="miasto">Miasto</label>
        <input id ="miasto" type="text" name="miasto" value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
'  placeholder="Miasto" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="ulica">Ulica</label>
        <input id ="ulica" type="text" name="ulica" value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->ulica;?>
'  placeholder="Ulica" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="kodpocztowy">Kod-Pocztowy</label>
        <input id ="kodpocztowy" type="text" name="kodpocztowy"value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->kodpocztowy;?>
'   placeholder="Kod-Pocztowy" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="email">Email</label>
        <input id ="email" type="text" name="email" value= '<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
'  placeholder="Email" >
        </div>
             
  
             
        <div class="col-12">
            <input type="submit" value="Zarejestruj" class="button primary" />
             
        </div>
    </form>	
    </div>
   </div>
 
<?php
}
}
/* {/block 'content'} */
/* {block "Wiadomosci"} */
class Block_5263115296820bb364f5a63_29986184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_5263115296820bb364f5a63_29986184',
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
