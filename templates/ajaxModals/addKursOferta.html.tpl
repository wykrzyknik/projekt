{extends file="../modals/formBlock.html.tpl"}
{block name=action}kursoferta/dodaj/{/block}
{block name=title}Nowy kursoferta{/block}
{block name=body}{include file="../kursoferta/kursofertaForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
