
{if strlen($fields.part_number.value) <= 0}
{assign var="value" value=$fields.part_number.default_value }
{else}
{assign var="value" value=$fields.part_number.value }
{/if}  
<input type='text' name='{$fields.part_number.name}' 
    id='{$fields.part_number.name}' size='30' 
    maxlength='25' 
    value='{$value}' title=''  tabindex='1'      >