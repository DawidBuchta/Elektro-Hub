 <!-- image -->
 {extends file="main.tpl"}
  
 {block name="content"}  
<section>
        <h3>Produkty</h3>
        <h4>Wszystkie</h4>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    {foreach $przedmiot as $item}
                       
                        <div class="col-3 col-4-medium col-6-xsmall" >
                             <a href="{$conf->action_url}Przedmiot&id={$item["id_przedmiot"]}"> 
                                <span class="image fit">
                                    <img src="{$conf->app_root}/JPG/{$item["wartosc"]}" alt={$item["wartosc"]} />
                                </span>
                                {if (isset($user["nazwa_roli"]))}
                                    {if $user["nazwa_roli"]=="Klient"}
                                        <a href="{$conf->action_url}DodanoDoKoszykaOferta_View&id={$item["id_przedmiot"]}" class= "icon solid alt fa-cart-plus fa-2x center" ></a>  
                                   
                                     {else $user["nazwa_roli"]!="Klient"}

                                    {/if}
                                    {else}
                                         <a href="{$conf->action_url}DodanoDoKoszykaOferta_View&id={$item["id_przedmiot"]}" class= "icon solid alt fa-cart-plus fa-2x center" ></a> 
                                {/if} 
                                 </a>
                                <p  class="tekst-srodek">{$item["nazwa_producenta"]} {$item["nazwa"]}</p>
                          
                            <p class="tekst-srodek">cena: {$item["cena"]} PLN</p>
                        </div>
                        
                     
                     
                     
                  {/foreach}

                </div>
        </div>

</section>
{/block}
{block name="Wiadomosci_top"}
    
      <ol>
    {foreach $msgs->getMessages() as $msg}
 <li class=" {if $msg->isInfo()}inf{/if}
              {if $msg->isError()}err{/if}" >
    {$msg->text}
 </li>
  
{/foreach}
  </ol>
{/block}