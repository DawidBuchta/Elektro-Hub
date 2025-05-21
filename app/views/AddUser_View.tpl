{extends file="main.tpl"}


{block name=content}
   
    <div >
    <form action="{$conf->action_root}AddUser" method="post" >
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
         <label for="rola">Rola</label>
         <select name ="rola">
              {foreach item=rola from=$role}
                  {if {$rola["nazwa_roli"]}=="Klient"}
                  <option selected="selected" value={$rola["id_Roli"]} >{$rola["nazwa_roli"]}</option>
                  {else}
                      <option value={$rola["id_Roli"]} >{$rola["nazwa_roli"]}</option>
                  {/if}
                  
               {/foreach}
         </select>
         
         
         
         
        </div>

        <div class="col-12">
            <input type="submit" value="Dodaj" class="button primary" />
             
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
