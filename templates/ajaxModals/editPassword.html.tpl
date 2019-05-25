{extends file="../modals/formBlock.html.tpl"}
{block name=action}zmienHaslo/{/block}
{block name=title}Zmiana hasła{/block}
{block name=body}{include file="../Access/editPasswordForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Zmień hasło</button>{/block}
