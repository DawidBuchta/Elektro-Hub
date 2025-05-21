<?php
/* Smarty version 4.3.4, created on 2025-05-21 17:53:33
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\addUser_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682df6fdb293a4_33256991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5848acb6997a78ad1002ad94b2eddc4ae46ef65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\addUser_View.tpl',
      1 => 1747842671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682df6fdb293a4_33256991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_829950624682df6fdb15cc7_45933164', 'content');
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_387155447682df6fdb24ac7_37707398', "Wiadomosci");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_829950624682df6fdb15cc7_45933164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_829950624682df6fdb15cc7_45933164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    <div >
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
AddUser" method="post" >
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
         <label for="rola">Rola</label>
         <select name ="rola">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'rola');
$_smarty_tpl->tpl_vars['rola']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rola']->value) {
$_smarty_tpl->tpl_vars['rola']->do_else = false;
?>
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['rola']->value["nazwa_roli"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "Klient") {?>
                  <option selected="selected" value=<?php echo $_smarty_tpl->tpl_vars['rola']->value["id_Roli"];?>
 ><?php echo $_smarty_tpl->tpl_vars['rola']->value["nazwa_roli"];?>
</option>
                  <?php } else { ?>
                      <option value=<?php echo $_smarty_tpl->tpl_vars['rola']->value["id_Roli"];?>
 ><?php echo $_smarty_tpl->tpl_vars['rola']->value["nazwa_roli"];?>
</option>
                  <?php }?>
                  
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </select>
         
         
         
         
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
class Block_387155447682df6fdb24ac7_37707398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_387155447682df6fdb24ac7_37707398',
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
