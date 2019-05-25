{extends file="../baseTemplate.html.tpl"}
{block name=title}Formularz Rejestracji{/block}
{block name=body}
<div class="container">
<form id="regform" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}zarejestruj/" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło">
  </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Wprowadź imię">
  </div>
    <div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname" placeholder="Wprowadź nazwisko">
  </div>
  <div class="alert alert-danger collapse" role="alert"></div>
  <button type="submit" class="btn btn-default">Zarejestruj się</button>
</form>
</div>
{/block}
