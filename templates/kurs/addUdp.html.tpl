{extends file="../baseForm.html.tpl"}

{block name=title}Modyfikuj kurs{/block}

{block name=action}
kurs/mod/{$data['id']}/
{/block}
{block name=formBody}
  {include file="./kursForm.html.tpl"}
{/block}
