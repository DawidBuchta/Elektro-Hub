{extends file="main.tpl"}


{block name=content}
   
    <div >
        <form action="{$conf->action_root}AddItemView" method="post" enctype="multipart/form-data" >
         <div class="row gtr-uniform gtr-50">
  

        <div class="col-6 col-12-small">
            <label for="nazwa">nazwa </label>
            <input id="nazwa" type="text" name="nazwa"  value= '{$form->Nazwa}'  placeholder="nazwa"  />
        </div>
        <div class=" col-6 col-12-small " >
         <label for="cena">Cena</label>
        <input id ="cena" type="text" name="cena"  value= '{$form->Cena}' placeholder="cena" >
        </div>
        <div class=" col-6 col-12-small " >
         <label for="producent">producent</label>
         <select name ="producent">
              {foreach item=prod from=$form->Producent}
                  <option  value={$prod["id_Producenta"]} >{$prod["nazwa_producenta"]}</option>
                  
               {/foreach}
         </select>
        </div>
         <div class=" col-6 col-12-small " >
         <label for="kategorie">Kategoria</label>
         <select name ="kategorie">
              {foreach item=kat from=$form->Kategoria}
                  <option  value={$kat["id_Kategori"]} >{$kat["nazwa_kategori"]}</option>
                  
               {/foreach}
         </select>
        </div>
          <div class=" col-6 col-12-small " >
         <label for="atrybut">Atrybuty</label>
         <select name ="atrybut">
              {foreach item=atr from=$form->Atrybut}
                  <option  value={$atr["id_atrybutu"]} >{$atr["nazwa_atrybutu"]}</option>
                  
               {/foreach}
         </select>
        </div>
         <div class="col-6 col-12-small">
            <label for="wartosc">wartosc </label>
            <input id="wartosc" type="text" name="wartosc"  value= '{$form->Wartosc}'  placeholder="wartosc"  />
        </div>
         <div class="col-12 " >
             <label for="opis">opis </label>
             <textarea id ="opis" type="textbox" name="opis"  placeholder="opis" rows="6"></textarea>
        </div>
         
         <div class="col-12" >
         <label for="Zdjęcie">Zdjęcie główne </label>
         <input type="file" id="file" name="file" >
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
   
  

