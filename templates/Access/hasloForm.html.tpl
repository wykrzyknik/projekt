{extends file="../baseTemplate.html.tpl"}
  {block name=title}Formularz zmienhasla{/block}
  {block name=body}
  <div class="container">
  <form id="zmienhasloform" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}zmienhaslo/" method="post">
    <div class="form-group">
      <label for="password">Nowe hasło</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="Wprowadź haslo">
    </div>
  {/block}
{/block}
