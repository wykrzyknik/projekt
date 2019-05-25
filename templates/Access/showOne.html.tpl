
{extends file="../baseTemplate.html.tpl"}

{block name=title}Szczegółowe informacje o użytkowniku{/block}
{if $currentUser != false}
{block name=body}
<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h4><span style="color:red">Id</span> {$data['id']} </br> <span style="color:red">Login</span> {$data['login']} </br>  <span style="color:red">Imie</span> {$data['name']} </br><span style="color:red">Nazwisko</span> {$data['surname']} </br></h3>
        <p class="text-right">
          <button type="button" class="btn btn-primary btn-sm edit-button"
                data-url="Access/formularz-edycja/{$row['id']}/"
                data-toggle="tooltip" data-placement="top" title="Edytuj użytkownika">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          </button>
        </p>
      </div>
    </div>
  </div>
</div>
{/block}
{else if $currentUser == false}

{block name=body}
<h4><span style="color:red">Błąd podczas wejścia na podaną strone:  </span></h4></br>
<h5><span style="color:green">Nie jesteś zalogowany/a na strone. Musisz być zalogowany ,aby uzyskać dostęp do tej strony  </span></h5></br></br>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-logowania/" type="button">Zaloguj się</a></br>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-rejestracji/" type="button">Rejestracja</a></br>
	{/block}
{/if}

{block name=footer prepend}
{include file='../modals/deleteConfirmBlock.html.tpl'}
{/block}
