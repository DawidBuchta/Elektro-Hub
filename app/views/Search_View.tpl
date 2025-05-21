{if $users==NULL}
    <p> Brak wyników </p>
    </br>
{else} 
    <form  action="{$conf->action_root}RemoveUser" method="post">         
        <table class="alt mid" >
            {*<input type="checkbox" id="scales" name="scales" checked />*}
            <thead>
                <tr>
                    <th>check</th>
                    <th>Id_User</th>
                    <th>Rola</th>
                    <th>Login</th>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Kod-Pocztowy</th>
                    <th>Email</th>
                    <th>Data Stworzenia</th>
                    <th>ID_Create</th>
                    <th>Date_Mod</th>
                    <th>ID_Mod</th>
                </tr>
            </thead>
            <tbody >

                {foreach item=user from=$users}



                    <tr>
                        <td style="width: 5%">

                            {if $user['login']!=NULL}
                                <input   type="checkbox" id={$user['login']} value={$user['login']}  name=users[]>
                                <label  for={$user['login']}></label>
                            {/if}



                        </td>
                        {foreach key=key item=item from=$user}


                            {if ($item!= NULL)}
                                <td>{$item}</td>
                            {else}
                                <td>brak</td>
                            {/if}
                        {/foreach}
                    </tr>
                {/foreach}

            </tbody>
        </table>

        <div class="col-6">
            <input type="submit" value="usuń zaznaczone" class="button primary" />
        </div>
    </form>  

{/if}