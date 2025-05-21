{extends file="main.tpl"}


{block name="content"}
    
    <h1> Dane Klienta </h1>
    
    <table class="alt mid" >
            {*<input type="checkbox" id="scales" name="scales" checked />*}
            <thead>
                <tr>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Kod-Pocztowy</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody >

        



                    <tr>
                        {foreach key=key item=item from=$customer}


                            {if ($item!= NULL)}
                                <td>{$item}</td>
                            {else}
                                <td>brak</td>
                            {/if}
                        {/foreach}
                    </tr>
             

            </tbody>
        </table>
 <h1> Koszyk </h1>
    <form action="{$conf->action_root}OrderSend&id={$koszyk[0]["id_zamowienia"]}" method="post">
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
              
                    
                    <input type="submit" class="button primary" value="wysłane"/>
                 
              
         </form>

   
    
   
    {/block}
