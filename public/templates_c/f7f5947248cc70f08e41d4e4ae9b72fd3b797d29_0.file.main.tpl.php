<?php
/* Smarty version 4.3.4, created on 2025-05-21 18:15:43
  from 'C:\xampp\htdocs\Projekt_Systemu\Elektro-Hub\app\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682dfc2f509080_74716537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7f5947248cc70f08e41d4e4ae9b72fd3b797d29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_Systemu\\Elektro-Hub\\app\\views\\main.tpl',
      1 => 1747844132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682dfc2f509080_74716537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>




<html>
	<head>
		<title>Sklep Internetowy  - Elektro Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/style.css" />
                <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/JPG/logo.jpg">
                <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/JPG/logo.jpg">
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
                                   
					<h1 id="logo">
                                         <span class="image fit2 "> <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/JPG/logo.jpg"/></span>
                                        </h1>
                                        <h1 id="logo" class="tekst">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a>
                                        </h1>
					<nav id="nav">
						<ul>
							                                                      
                                                        
                                                        
                                                       <?php if (((isset($_smarty_tpl->tpl_vars['user']->value)))) {?>
                                                      
                                                           <?php if (($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"] == "Klient")) {?>
                                                               <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Wyswietl_Koszyk" class= "Button primary icon solid alt fa-shopping-cart fa-1x">Koszyk</a></a></li>
                                                           <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
OrderHistory" class= "button primary" >Historia Zamówień</a></li>
                                                            <?php } else { ?>
                                                           
                                                                    Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value["nazwa_roli"];?>


                                                                    <?php if (($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"] == "Administrator")) {?>
                                                                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adduser_view" class= "button primary" >Dodaj Użytkownika</a></li>
                                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
wyswietl" class="button primary">Wyswietl użytkownikow</a></li>
                                                                    <?php }?>

                                                                    <?php if (($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"] == "Magazynier")) {?>
                                                                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
OrderStatus_View" class= "button primary" >Status zamowien</a></li>
                                                                    
                                                                    <?php }?>
                                                                    <?php if (($_smarty_tpl->tpl_vars['user']->value["nazwa_roli"] == "Marketing")) {?>
                                                                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AddItemView" class= "button primary" >Dodaj Przedmiot</a></li>     
                                                                    <?php }?>
                                                          
                                                           
                                                           <?php }?>
                                                           <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button primary">Wyloguj</a></li>
                                                       <?php } else { ?>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Zarejestruj" class="button primary">Zarejestruj</a></li>  
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Login" class="button primary">Zaloguj</a></li>
                                                        <?php }?>
                                                        
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Sklep Internetowy  - Elektro Hub</h2>
                                                       
							<blockquote>Czy jest tanio? Jest Tanio. Czy jest dobrze? Jest tanio.</blockquote>
                                                        
						</header>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206548158682dfc2f506764_38545707', "Wiadomosci_top");
?>

                                               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_316988905682dfc2f507620_86315068', "content");
?>

                                              
                                               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1253758631682dfc2f508232_61803124', "Wiadomosci");
?>

                                               
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block "Wiadomosci_top"} */
class Block_206548158682dfc2f506764_38545707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci_top' => 
  array (
    0 => 'Block_206548158682dfc2f506764_38545707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "Wiadomosci_top"} */
/* {block "content"} */
class Block_316988905682dfc2f507620_86315068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_316988905682dfc2f507620_86315068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block "content"} */
/* {block "Wiadomosci"} */
class Block_1253758631682dfc2f508232_61803124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_1253758631682dfc2f508232_61803124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "Wiadomosci"} */
}
