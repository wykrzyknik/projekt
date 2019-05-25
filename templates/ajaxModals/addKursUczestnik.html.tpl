{extends file="../modals/formBlock.html.tpl"}
{block name=action}kursuczestnik/dodaj/{/block}
{block name=title}Nowy kursuczestnik{/block}
{block name=body}{include file="../kursuczestnik/kursuczestnikForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
