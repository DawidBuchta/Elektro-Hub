<?php
/* Smarty version 4.3.4, created on 2025-04-02 22:39:24
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\Search_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67eda07cd18539_30320375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa5f5ec01646c21015c23396fa9fa9287708beb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\Search_View.tpl',
      1 => 1743626363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eda07cd18539_30320375 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['users']->value == NULL) {?>
    <p> Brak wyników </p>
    </br>
<?php } else { ?> 
    <form  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RemoveUser" method="post">         
        <table class="alt mid" >
                        <thead>
                <tr>
                    <th>check</th>
                    <th>Id_User</th>
                    <th>Rola</th>
                    <th>Login</th>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Kod-Pocztowy</th>
                    <th>Email</th>
                    <th>Data Stworzenia</th>
                    <th>ID_Create</th>
                    <th>Date_Mod</th>
                    <th>ID_Mod</th>
                </tr>
            </thead>
            <tbody >

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>



                    <tr>
                        <td style="width: 5%">

                            <?php if ($_smarty_tpl->tpl_vars['user']->value['login'] != NULL) {?>
                                <input   type="checkbox" id=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 value=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
  name=users[]>
                                <label  for=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
></label>
                            <?php }?>



                        </td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'item', false, 'key');
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
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>

        <div class="col-6">
            <input type="submit" value="usuń zaznaczone" class="button primary" />
        </div>
    </form>  

<?php }
}
}
