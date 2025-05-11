<?php
/* Smarty version 4.3.4, created on 2025-04-11 21:58:42
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\amelia\app\views\pages_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f9747237cce4_41386756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c1793bdc7c66e856d4a69dc519d04f816672fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\amelia\\app\\views\\pages_view.tpl',
      1 => 1743619991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f9747237cce4_41386756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['num_page']->value;?>
<p>  

<button <?php if ($_smarty_tpl->tpl_vars['page']->value > 1 && $_smarty_tpl->tpl_vars['page']->value <= $_smarty_tpl->tpl_vars['num_page']->value) {?> onclick="wczytajStrone('1','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('1','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="1" class= "button primary "<?php } else { ?>class= "button primary disabled"<?php }?> ><<</button>
<button <?php if ($_smarty_tpl->tpl_vars['page']->value > 1 && $_smarty_tpl->tpl_vars['page']->value <= $_smarty_tpl->tpl_vars['num_page']->value) {?> onclick="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class= "button primary "<?php } else { ?>class= "button primary disabled"<?php }?> ><</button>
<?php if ($_smarty_tpl->tpl_vars['page']->value > 1 && $_smarty_tpl->tpl_vars['page']->value <= $_smarty_tpl->tpl_vars['num_page']->value) {?><button onclick="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class= "button primary"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</button> <?php }?>
  
<button onclick="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class= "button primary" ><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</button>
    
<?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['num_page']->value) {?> <button onclick="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class= "button primary" ><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</button><?php }?>       
<button <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['num_page']->value) {?> onclick="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class= "button primary"<?php } else { ?>class= "button primary disabled"<?php }?>>></button>
<button <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['num_page']->value) {?> onclick="wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['num_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pages','pagess');wczytajStrone('<?php echo $_smarty_tpl->tpl_vars['num_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search','tabela')" value="<?php echo $_smarty_tpl->tpl_vars['num_page']->value;?>
" class= "button primary"<?php } else { ?>class= "button primary disabled"<?php }?> >>></button>
     <?php }
}
