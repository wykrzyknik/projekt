{extends file="./tableTemplate.html.tpl"}

{block name=checkableFormHeader}
<form id="form-datatable" class="checkable" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=action}{/block}" method="POST">
<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	{block name=groupAction}
		<button type="submit" class="btn btn-danger pull-right" title="Usuń zaznaczone">
			{block name=submit}<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń zaznaczone{/block}
		</button>
	{/block}
</span></div>
{/block}

{block name=checkableFormFooter}
</form>
{/block}
