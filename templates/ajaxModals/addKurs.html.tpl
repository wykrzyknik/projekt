{extends file="../modals/formBlock.html.tpl"}
{block name=action}kurs/dodaj/{/block}
{block name=title}Nowy kurs{/block}
{block name=body}{include file="../kurs/kursForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
