{extends file="main.tpl"}

{block name="content"}  

    <div id="tabela">
        {include file="Search_View.tpl"}
    </div>

    <input oninput="wyslijwartosc('search','{$conf->action_root}search','tabela')" onkeyup="wczytajStrone('{$page}', '{$conf->action_root}pages', 'pagess')"  id="search" class ="search" type="text" name="search" placeholder="wyszukaj"  value='{$search}'   />

    <div id="pagess">
        {include file="pages_view.tpl"}
    </div>


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