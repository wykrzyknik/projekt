{extends file="../baseTemplate.html.tpl"}

{block name=title}Szczegółowe informacje o kurs{/block}
{if $currentUser != false}
{block name=body}
<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">

        <h4><span style="color:red">Id</span> {$data['id']} </br> <span style="color:blue">Nazwa kursoferta</span>  {$Idkursofertaa[$data['Idkursuoferta']]['Nazwaoferty']} </br> <span style="color:blue">Poziom kursoferta</span>  {$Idkursofertaa[$data['Idkursuoferta']]['PoziomKursu']} </br> <span style="color:blue">Cena kursoferta</span>  {$Idkursofertaa[$data['Idkursuoferta']]['Cena']} </br> <span style="color:green">Imie i Nazwisko Lektora</span> {$Idlektoraa[$data['Idlektora']]['Imie']} {$Idlektoraa[$data['Idlektora']]['Nazwisko']} </br> <span style="color:green">Telefon Lektora</span> {$Idlektoraa[$data['Idlektora']]['Telefon']} </br> <span style="color:green">Email Lektora</span> {$Idlektoraa[$data['Idlektora']]['Email']} </br> <span style="color:green">Adres zamieszkania Lektora</span> {$Idlektoraa[$data['Idlektora']]['Miasto']} , {$Idlektoraa[$data['Idlektora']]['Ulica']} {$Idlektoraa[$data['Idlektora']]['Numerdomu']}/{$Idlektoraa[$data['Idlektora']]['Numerlokalu']} </br>  <span style="color:red">Maksymalna_liczba_os</span>  {$data['Maksymalna_liczba_os']} </br> <span style="color:red">Nrsali</span> {$data['Nrsali']} </br> <span style="color:red">data_rozpoczecia</span> {$data['data_rozpoczecia']} <span style="color:red">data_zakonczenia</span> {$data['data_zakonczenia']} </h3>
        <p class="text-right">
          <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kurs/usun/{$data['id']}" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń kurs
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
