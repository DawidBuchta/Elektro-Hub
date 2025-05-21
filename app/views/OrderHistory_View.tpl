{extends file="main.tpl"}


{block name="content"}
    {if ($status=="ok")}
    
<table class="alt mid" style="font-size: 0.8em ;white-space: normal">
    
    <thead>
            <tr>
                 <th></th>
                    
                    <th>Status</th>
                    <th>Data Złozenia Zamówienia</th>
                    <th>Cena Zamówienia</th>

            </tr>
    </thead>
    <tbody>
    
     {foreach item=przedmiot from=$zamowienia name=row}
 
            <tr>
                <td style="width: 5%">
                 
                
                    <a href="{$conf->action_url}OrderDetail_View&id={$przedmiot["id_zamowienia"]}"> Szczegóły zamówienia</a>
           
                </td>

              <td>{$przedmiot["status_zamowienia"]}</td>
              <td>{$przedmiot["data_zlozenia_zam"]}</td>
              <td>{$przedmiot["cena_laczna"]}</td>
              

                         
                    
            </tr>
    {/foreach}
    </tbody>
</table>
    
{else}
    <h1>Brak zamówień :C</h1>
    
    {/if}
    {/block}
