<?php
/* Smarty version 4.3.4, created on 2025-05-11 16:59:01
  from 'C:\xampp\htdocs\Projekt_systemu\Elektro-hub\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6820bb3550d217_96165266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea9f104c1d38160a994b146d6c167edbed7b263' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_systemu\\Elektro-hub\\app\\views\\login_view.tpl',
      1 => 1746975479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6820bb3550d217_96165266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20931559496820bb35502151_28675681', "content");
?>


 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19147939126820bb355053f3_54793919', "Wiadomosci");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_20931559496820bb35502151_28675681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20931559496820bb35502151_28675681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Login" method="post" class="pure-form pure-form-aligned">
	
            <div class="pure-control-group"
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" name="login" placeholder ="login"  />
            </div>
            <div class="pure-control-group"
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" name="pass" placeholder ="haslo" />
            </div>
	
            <div class="pure-control-group">
             <input type="submit" value="zaloguj" class="button primary"/>
            </div>
      
</form>	
                <div>            
<?php
}
}
/* {/block "content"} */
/* {block "Wiadomosci"} */
class Block_19147939126820bb355053f3_54793919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_19147939126820bb355053f3_54793919',
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
