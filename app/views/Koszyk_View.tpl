{extends file="main.tpl"}


{block name="content"}
    {if ($status=="ok")}
    <form action="{$conf->action_root}RemoveItems" method="post">
<table class="alt mid" style="font-size: 0.8em ;white-space: normal">
    
    <thead>
            <tr>
                 <th>zaznacz</th>
                    
                    <th>Nazwa</th>
                    <th>Ilosc</th>
                    <th>Cena za szt.</th>
                    <th>Cena łączna</th>
            </tr>
    </thead>
    <tbody>
    
     {foreach item=przedmiot from=$koszyk name=row}
 
            <tr>
                <td style="width: 5%">
                 
                
            <input type="checkbox" id={$przedmiot["id_przedmiot_koszyk"]} value={$przedmiot["id_przedmiot_koszyk"]}  name=items[]>
            <label for={$przedmiot["id_przedmiot_koszyk"]}></label>
           
                </td>

              <td>{$przedmiot["nazwa"]}</td>
              <td>{$przedmiot["ilosc"]}</td>
              <td>{$przedmiot["cena"]}</td>
              <td>{$przedmiot["cena_razem"]}</td>
              

                         
                    
            </tr>
    {/foreach}
    </tbody>
</table>
    
    <p><b>Razem: {$razem} PLN<b><p>
               <nav id="nav"> 
                <a class="button primary" href="{$conf->action_url}ZlozZamowienie">Złóż Zamówienie</a>
   
                 <input type="submit" value="usuń zaznaczone" class="button primary" />
              
         </form>
{else}
    <h1>Pusty Koszyk :C</h1>
    
    {/if}
    {/block}
