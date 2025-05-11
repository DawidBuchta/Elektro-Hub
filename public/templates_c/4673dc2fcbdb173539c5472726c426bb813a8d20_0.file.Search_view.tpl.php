<?php
/* Smarty version 4.3.4, created on 2025-04-01 21:25:01
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\Search_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ec3d8d6709f1_57480071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4673dc2fcbdb173539c5472726c426bb813a8d20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\Search_view.tpl',
      1 => 1743535368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ec3d8d6709f1_57480071 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            
               
            
            <tr>
                <td style="width: 5%">
                 
                <?php if ($_smarty_tpl->tpl_vars['user']->value['login'] != NULL) {?>
            <input type="checkbox" id=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 value=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
  name=users[]>
            <label for=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
