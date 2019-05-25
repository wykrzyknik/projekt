{extends file="../modals/formBlock.html.tpl"}
{block name=action}Access/aktualizuj/{/block}
{block name=title}Edycja użytkownika/{/block}
{block name=body}
  <input type="hidden" id="id" name="id" value="{if isset($data['id'])}{$data['id']}{/if}">
  {include file="../Access/accessForm.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Aktualizuj</button>{/block}
