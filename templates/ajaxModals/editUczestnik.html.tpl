{extends file="../modals/formBlock.html.tpl"}
{block name=action}uczestnik/aktualizuj/{/block}
{block name=title}Edycja uczestnik{/block}
{block name=body}
  <input type="hidden" id="id" name="id" value="{if isset($data['id'])}{$data['id']}{/if}">
  {include file="../uczestnik/uczestnikForm.html.tpl"}
{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Aktualizuj</button>{/block}
