<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}localhost">Strona Główna</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      {block name=leftNavbar}
      <ul class="nav navbar-nav">
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}uczestnik/">Uczestnik</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}lektor/">Lektor</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kurs/">Kurs</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kursoferta/">KursOferta</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kursuczestnik/">KursUczestnik</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/">Jezyk</a></li>
      </ul>
      
      {/block}
      {block name=rightNavbar}
      <ul class="nav navbar-nav navbar-right">
              {if $currentUser != false}
        <li class="dropdown">
          <a href="#">Zalogowany/a</a></li>
          <li><a id="edit-password" data-url="formularz-zmiany-hasla/">Zmień hasło</a></li>
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wyloguj/">Wyloguj się</a></li>
          </ul>

                {else}
        </li>
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-logowania/">Zaloguj się</a></li>
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-rejestracji/">Rejestracja</a></li>
        {/if}
      </ul>
      {/block}

    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- Bootstrap core JavaScript
	 ================================================== -->
	 <!-- Placed at the end of the document so the pages load faster -->
	 <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/external/jquery.min.js"></script>
 <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/external/validator.min.js"></script>
	 <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/external/bootstrap.min.js"></script>
 <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/external/datatables.min.js"></script>
 <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/external/dataTables.checkboxes.min.js"></script>
