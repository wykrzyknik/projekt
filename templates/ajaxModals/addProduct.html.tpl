{extends file="../modals/formBlock.html.tpl"}
{block name=action}produkt/dodaj/{/block}
{block name=title}Nowy produkt{/block}
{block name=body}{include file="../Product/productForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
