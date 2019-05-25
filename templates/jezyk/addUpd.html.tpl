{extends file="../baseForm.html.tpl"}

{block name=title}Modyfikuj jezyk{/block}

{block name=action}
jezyk/aktualizuj/{$data['id']}
{/block}
{block name=formBody}
  {include file="./jezykForm.html.tpl"}
{/block}
