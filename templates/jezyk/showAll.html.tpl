
{if $currentUser != false}

	{extends file="../tableTemplate.html.tpl"}
	{block name=title}Lista Jezyk{/block}
{*block name=checkableFormHeader}
<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	{block name=groupAction prepend}
	<a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/formularz/" type="button" class="btn btn-primary add-button"
			data-toggle="tooltip" data-placement="top" title="Dodaj jezyk">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj jezyk
	</a>
	{/block}
</span></div>
{/block*}

{block name=checkableFormHeader}
<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	{block name=groupAction prepend}
	    <button type="button" class="btn btn-primary add-button"
	          data-url="jezyk/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj jezyk">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj jezyk
	    </button>
	{/block}
</span></div>
{/block}



{block name=thead}
	<th>id</th>
	<th>NazwaJezyka</th>
	<th class="hidden-print"></th>
{/block}
{block name=tfoot}
  <th class="searchable">id</th>
  <th class="searchable">NazwaJezyka</th>
  <th></th>
{/block}
{block name=tbody}
	<td>{$row['id']}</td>
  <td>{$row['NazwaJezyka']}</td>
  <td><span class="btn-group pull-right">
		<a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/{$row['id']}" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true"></span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="jezyk/formularz-edycja/{$row['id']}/"
          data-toggle="tooltip" data-placement="top" title="Edytuj jezyk">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/usun/{$row['id']}/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń jezyk">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>




  </span></td>
{/block}
{else if $currentUser == false}

{block name=body}
<h4><span style="color:red">Błąd podczas wejścia na podaną strone:  </span></h4></br>
<h5><span style="color:green">Nie jesteś zalogowany/a na strone. Musisz być zalogowany ,aby uzyskać dostęp do tej strony  </span></h5></br></br>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-logowania/" type="button">Zaloguj się</a></br>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-rejestracji/" type="button">Rejestracja</a></br>
	{/block}

{/if}
