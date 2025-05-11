 <!-- image -->
 {extends file="main.tpl"}
 {block name="content"}  
<section>
        <h3>Produkt</h3>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    
                        <div class="col-4 col-6-xsmall ">
                            <a>
                            <span class="image fit"><img src="{$conf->app_root}/JPG/{$zdjecie}" alt={$zdjecie} /></span>
                            <p class="tekst-srodek"> {$przedmiot["Nazwa"]}</p>
                            </a> 
                        </div>
                            <div class="col-1">       
                            {if (isset($user["nazwa_roli"]))}
                                {if $user["nazwa_roli"]=="Klient"}
                                    <a href="{$conf->action_url}DodanoDoKoszykaPrzedmiot_View&id={$id_przedmiot}" class= "icon solid alt fa-cart-plus fa-4x" ></a>  
                                {else $user["nazwa_roli"]=="Administrator" ||$user["nazwa_roli"]=="Marketing" }
                                    <a href="{$conf->action_url}RemoveItem&id={$id_przedmiot}" class= "icon solid alt fa-trash-alt fa-4x" ></a>  
                                 {/if}
                                 {else}
                                    {* <a href="{$conf->action_url}DodanoDoKoszykaPrzedmiot_View&id={$id_przedmiot}" class= "icon solid alt fa-cart-plus fa-4x" ></a>  *}
                            {/if}
                             <br></br>
                            <b> <p class="tekst-srodek">cena:{$przedmiot["cena"]}</p></b>
                        </div>
                             <div class="col-7 col-6-xsmall ">    
                                 
                                 {foreach $atrybuty as $item}
                                     <p class="tekst-srodek"><b>{$item['nazwa_atrybutu']}</b> {$item['wartosc']}</p>
                            {/foreach}
                        </div>
                         
                         <div class="col-12 ">    
                                 
                                 
                            <p class="tekst-srodek">{$przedmiot["opis"]}</p>
                         
                        </div>
                     
                

                </div>
        </div>

</section>
{/block}
{block name="Wiadomosci"}
    
     
  {if (isset ($msg))} 
 <div class=" inf" >
    {$msg}
 </div>
{/if}
  

 
{/block}