{extends file="../baseTemplate.html.tpl"}

{block name=title}Szczegółowe informacje o kursoferta{/block}
{if $currentUser != false}
{block name=body}
<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h3><span style="color:red">Id</span> {$data['id']} </br> <span style="color:blue">Jezyk</span>  {$Idjezykaa[$data['Idjezyka']]['NazwaJezyka']} </br> <span style="color:red">Nazwaoferty</span> {$data['Nazwaoferty']} </br> <span style="color:red">PoziomKursu</span>  {$data['PoziomKursu']} </br> <span style="color:red">Cena</span> {$data['Cena']} </br> </h3>
        <p class="text-right">
          <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kursoferta/usun/{$data['id']}" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń kursoferta
          </a>
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
