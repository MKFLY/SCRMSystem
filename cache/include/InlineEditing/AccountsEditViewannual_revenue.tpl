
{if strlen($fields.annual_revenue.value) <= 0}
{assign var="value" value=$fields.annual_revenue.default_value }
{else}
{assign var="value" value=$fields.annual_revenue.value }
{/if}  
<input type='text' name='{$fields.annual_revenue.name}' 
    id='{$fields.annual_revenue.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >