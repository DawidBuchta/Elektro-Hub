<?php
/* Smarty version 4.3.4, created on 2025-05-21 17:53:32
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\pages_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682df6fcb82338_40860152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495d8845918d1e1dc6d81c94bdc2651a5cdc72ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\pages_view.tpl',
      1 => 1747842671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682df6fcb82338_40860152 (Smarty_Internal_Template $_smarty_tpl) {
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
