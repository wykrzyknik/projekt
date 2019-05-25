{extends file="../modals/formBlock.html.tpl"}
{block name=action}jezyk/dodaj/{/block}
{block name=title}Nowy jezyk{/block}
{block name=body}{include file="../jezyk/jezykForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
