{extends file="../modals/formBlock.html.tpl"}
{block name=action}lektor/dodaj/{/block}
{block name=title}Nowy lektor{/block}
{block name=body}{include file="../lektor/lektorForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
