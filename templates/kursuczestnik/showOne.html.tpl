{extends file="../baseTemplate.html.tpl"}

{block name=title}Szczegółowe informacje o kursuczestnik{/block}
{if $currentUser != false}
{block name=body}
<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h4><span style="color:red">Id</span> {$data['id']} </br> <span style="color:blue">Data rozpoczecia / Zakonczenia kursu</span>  {$Idkursuu[$data['Idkursu']]['data_rozpoczecia']} / {$Idkursuu[$data['Idkursu']]['data_rozpoczecia']} </br> <span style="color:blue">Kurs Maksymalna_liczba_os</span>  {$Idkursuu[$data['Idkursu']]['Maksymalna_liczba_os']} </br> <span style="color:blue">Kurs NrSali</span>  {$Idkursuu[$data['Idkursu']]['Nrsali']}  </br>  <span style="color:green">Nazwisko Imie Uczestnika</span> {$Iduczestnikaa[$data['Iduczestnika']]['Nazwisko']} {$Iduczestnikaa[$data['Iduczestnika']]['Imie']} </br> <span style="color:green">Data_ur Uczestnika</span> {$Iduczestnikaa[$data['Iduczestnika']]['Data_ur']} </br> <span style="color:green">PESEL Uczestnika </span> {$Iduczestnikaa[$data['Iduczestnika']]['PESEL']} </br>  <span style="color:green">Telefon Uczestnika </span> {$Iduczestnikaa[$data['Iduczestnika']]['Telefon']} </br>  <span style="color:green">Email Uczestnika </span> {$Iduczestnikaa[$data['Iduczestnika']]['Email']} </br> <span style="color:green">Adres Uczestnika </span> {$Iduczestnikaa[$data['Iduczestnika']]['Miasto']} {$Iduczestnikaa[$data['Iduczestnika']]['Numerlokalu']} </br> <span style="color:red">Oplacano</span>  {$data['Oplacano']} </br> <span style="color:red">Opis</span> {$data['Opis']} </br> </h4>
        <p class="text-right">
          <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kursuczestnik/usun/{$data['id']}" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń kursuczestnik
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
