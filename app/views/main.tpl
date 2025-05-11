



<html>
	<head>
		<title>Sklep Internetowy  - Elektro Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_root}/assets/css/main.css" />
                <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
                <link rel="stylesheet" href="{$conf->app_root}/assets/css/style.css" />
                <link rel="shortcut icon" href="{$conf->app_root}/JPG/logo.jpg">
                <link rel="apple-touch-icon" href="{$conf->app_root}/JPG/logo.jpg">
		<noscript><link rel="stylesheet" href="{$conf->app_root}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
                                   
					<h1 id="logo">
                                         <span class="image fit2 "> <img src="{$conf->app_root}/JPG/logo.jpg"/></span>
                                        </h1>
                                        <h1 id="logo" class="tekst">
                                            <a href="{$conf->action_url}">Strona główna</a>
                                        </h1>
					<nav id="nav">
						<ul>
							{*<li>
								<a href="#">Kategorie</a>
								<ul>
									<li><a href="#">Wszystkie</a></li>
									<li><a href="#">Procesory</a></li>
									<li><a href="#">Karty Graficzne</a></li>
									
								</ul>
							</li>*}
                                                      
                                                        
                                                        
                                                       {if (isset($user))}
                                                      
                                                           {if ($user["nazwa_roli"]=="Klient")}
                                                               <li> <a href="{$conf->action_url}Wyswietl_Koszyk" class= "Button primary icon solid alt fa-shopping-cart fa-1x">Koszyk</a></a></li>
                                                           <li> <a href="{$conf->action_url}OrderHistory" class= "button primary" >Historia Zamówień</a></li>
                                                            {else}
                                                           
                                                                    Rola: {$user["nazwa_roli"]}

                                                                    {if ($user["nazwa_roli"]=="Administrator")}
                                                                    <li> <a href="{$conf->action_url}adduser_view" class= "button primary" >Dodaj Użytkownika</a></li>
                                                                    <li><a href="{$conf->action_url}wyswietl" class="button primary">Wyswietl użytkownikow</a></li>
                                                                    {/if}

                                                                    {if ($user["nazwa_roli"]=="Magazynier")}
                                                                    <li> <a href="{$conf->action_url}adduser_view" class= "button primary" >Dodaj Użytkownika</a></li>
                                                                    <li><a href="{$conf->action_url}wyswietl" class="button primary">Wyswietl użytkownikow</a></li>
                                                                    {/if}
                                                                    {if ($user["nazwa_roli"]=="Marketing")}
                                                                    <li> <a href="{$conf->action_url}AddItemView" class= "button primary" >Dodaj Przedmiot</a></li>     
                                                                    {/if}
                                                          
                                                           
                                                           {/if}
                                                           <li><a href="{$conf->action_url}logout" class="button primary">Wyloguj</a></li>
                                                       {else}
                                                        <li><a href="{$conf->action_url}Zarejestruj" class="button primary">Zarejestruj</a></li>  
							<li><a href="{$conf->action_url}Login" class="button primary">Zaloguj</a></li>
                                                        {/if}
                                                        
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

                                                {block name="Wiadomosci_top"} {/block}
                                               {block name="content"}  {/block}
                                              
                                               {block name="Wiadomosci"} {/block}
                                               
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
