{*<button onclick="ajaxPostForm('search-form','{$conf->action_root}search','tabela'); wczytajStrone('{$page}','{$conf->action_root}pages','pagess')" value="wyszukaj" class="button primary" >wyszukaj</button>
*}

<p>Strona {$page} z {$num_page}<p>  

<button {if $page>1 && $page<=$num_page} onclick="wczytajStrone('1','{$conf->action_root}pages','pagess');wczytajStrone('1','{$conf->action_root}search','tabela')" value="1" class= "button primary "{else}class= "button primary disabled"{/if} ><<</button>
<button {if $page>1 && $page<=$num_page} onclick="wczytajStrone('{$page-1}','{$conf->action_root}pages','pagess');wczytajStrone('{$page-1}','{$conf->action_root}search','tabela')" value="{$page-1}" class= "button primary "{else}class= "button primary disabled"{/if} ><</button>
{if $page>1 && $page<=$num_page}<button onclick="wczytajStrone('{$page-1}','{$conf->action_root}pages','pagess');wczytajStrone('{$page-1}','{$conf->action_root}search','tabela')" value="{$page-1}" class= "button primary">{$page-1}</button> {/if}
  
<button onclick="wczytajStrone('{$page}','{$conf->action_root}pages','pagess');wczytajStrone('{$page}','{$conf->action_root}search','tabela')" value="{$page}" class= "button primary" >{$page}</button>
    
{if $page<$num_page} <button onclick="wczytajStrone('{$page+1}','{$conf->action_root}pages','pagess');wczytajStrone('{$page+1}','{$conf->action_root}search','tabela')" value="{$page+1}" class= "button primary" >{$page+1}</button>{/if}       
<button {if $page<$num_page} onclick="wczytajStrone('{$page+1}','{$conf->action_root}pages','pagess');wczytajStrone('{$page+1}','{$conf->action_root}search','tabela')" value="{$page+1}" class= "button primary"{else}class= "button primary disabled"{/if}>></button>
<button {if $page<$num_page} onclick="wczytajStrone('{$num_page}','{$conf->action_root}pages','pagess');wczytajStrone('{$num_page}','{$conf->action_root}search','tabela')" value="{$num_page}" class= "button primary"{else}class= "button primary disabled"{/if} >>></button>
     