<!DOCTYPE HTML>

{extends file="main.tpl"}


{block name="content"}

    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="{$conf->action_root}Login" method="post" class="pure-form pure-form-aligned">
	
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
{/block}

 {block name="Wiadomosci"}
    
      <ol>
    {foreach $msgs->getMessages() as $msg}
 <li class=" {if $msg->isInfo()}inf{/if}
              {if $msg->isError()}err{/if}" >
    {$msg->text}
 </li>
  
{/foreach}
  </ol>
{/block}


