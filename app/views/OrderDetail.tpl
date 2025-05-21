{extends file="main.tpl"}


{block name="content"}
 
    <form action="{$conf->action_root}OrderCancel&id={$koszyk[0]["id_zamowienia"]}" method="post">
<table class="alt mid" style="font-size: 0.8em ;white-space: normal">
    
    <thead>
            <tr>
                
                    
                    <th>Nazwa</th>
                    <th>Ilosc</th>
                    <th>Cena za szt.</th>
                    <th>Cena łączna</th>
            </tr>
    </thead>
    <tbody>
    
     {foreach item=przedmiot from=$koszyk name=row}
 
            <tr>
                

              <td>{$przedmiot["nazwa"]}</td>
              <td>{$przedmiot["ilosc"]}</td>
              <td>{$przedmiot["cena"]}</td>
              <td>{$przedmiot["cena_razem"]}</td>
              

                         
                    
            </tr>
    {/foreach}
    </tbody>
</table>
    
    <p><b>Razem: {$razem} PLN<b><p>
              
                    {if ($status==3)}
                    <input type="submit" class="button primary" value="Anulowanie zamowienia"/>
                    {/if}
                 
              
         </form>

   
    
   
    {/block}
