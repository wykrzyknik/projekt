{extends file="../modals/formBlock.html.tpl"}
{block name=action}uczestnik/dodaj/{/block}
{block name=title}Nowy uczestnik{/block}
{block name=body}{include file="../uczestnik/uczestnikForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
