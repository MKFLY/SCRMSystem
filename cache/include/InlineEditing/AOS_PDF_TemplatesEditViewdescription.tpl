
{if strlen($fields.description.value) <= 0}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<input type='text' name='{$fields.description.name}' 
    id='{$fields.description.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >