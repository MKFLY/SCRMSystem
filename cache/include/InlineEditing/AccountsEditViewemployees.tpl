
{if strlen($fields.employees.value) <= 0}
{assign var="value" value=$fields.employees.default_value }
{else}
{assign var="value" value=$fields.employees.value }
{/if}  
<input type='text' name='{$fields.employees.name}' 
    id='{$fields.employees.name}' size='30' 
    maxlength='10' 
    value='{$value}' title=''  tabindex='1'      >