<?php
/* Smarty version 4.3.4, created on 2025-05-11 16:58:59
  from 'C:\xampp\htdocs\Projekt_systemu\Elektro-hub\app\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6820bb33f2f683_26781043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b67904835c81a5b8cdd84c5f336a75e4d089e4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_systemu\\Elektro-hub\\app\\views\\main.tpl',
      1 => 1746975485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6820bb33f2f683_26781043 (Smarty_Internal_Template $_smarty_tpl) {
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
adduser_view" class= "button primary" >Dodaj Użytkownika</a></li>
                                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
wyswietl" class="button primary">Wyswietl użytkownikow</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_682930136820bb33f2dad9_45116233', "Wiadomosci_top");
?>

                                               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16299878176820bb33f2e535_74342952', "content");
?>

                                              
                                               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9944844516820bb33f2eb96_13131098', "Wiadomosci");
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
class Block_682930136820bb33f2dad9_45116233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci_top' => 
  array (
    0 => 'Block_682930136820bb33f2dad9_45116233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "Wiadomosci_top"} */
/* {block "content"} */
class Block_16299878176820bb33f2e535_74342952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16299878176820bb33f2e535_74342952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block "content"} */
/* {block "Wiadomosci"} */
class Block_9944844516820bb33f2eb96_13131098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Wiadomosci' => 
  array (
    0 => 'Block_9944844516820bb33f2eb96_13131098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "Wiadomosci"} */
}
