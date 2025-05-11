
{extends file="main.tpl"}


{block name=content}
   
    <div >
    <form action="{$conf->action_root}Zarejestruj" method="post" >
         <div class="row gtr-uniform gtr-50">
  

        <div class="col-6 col-12-small">
            <label for="login">Login </label>
            <input id="login" type="text" name="login"  value= '{$form->login}'  placeholder="Login"  />
        </div>
        <div class=" col-6 col-12-small " >
             <label for="password">Haslo </label>
        <input id ="password" type="text" name="password"  placeholder="Hasło" >
        </div>
        <div class=" col-6 col-12-small " >
         <label for="imie">Imie</label>
        <input id ="imie" type="text" name="imie" value= '{$form->imie}'  placeholder="Imie" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="nazwisko">Nazwisko</label>
        <input id ="nazwisko" type="text" name="nazwisko"  value= '{$form->nazwisko}' placeholder="Nazwisko" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="miasto">Miasto</label>
        <input id ="miasto" type="text" name="miasto" value= '{$form->miasto}'  placeholder="Miasto" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="ulica">Ulica</label>
        <input id ="ulica" type="text" name="ulica" value= '{$form->ulica}'  placeholder="Ulica" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="kodpocztowy">Kod-Pocztowy</label>
        <input id ="kodpocztowy" type="text" name="kodpocztowy"value= '{$form->kodpocztowy}'   placeholder="Kod-Pocztowy" >
        </div>
              <div class=" col-6 col-12-small " >
         <label for="email">Email</label>
        <input id ="email" type="text" name="email" value= '{$form->email}'  placeholder="Email" >
        </div>
             
  
             
        <div class="col-12">
            <input type="submit" value="Zarejestruj" class="button primary" />
             
        </div>
    </form>	
    </div>
   </div>
 
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

