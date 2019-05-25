  <!-- FOOTER -->
  {block name=footer}
  <div class="container">
      <footer class="footer">
        <p>Szkoła językowa 2019</p>

      <?php
        \Tools\FlashMessage::printDate();
        Dzisiaj jest  printDate();
         ?>
      </footer>
  </div>
  {/block}
  {block name=javascript}
  {if isset($jsFile)}
      {foreach $jsFile as $script}
          <script src="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}js/{$script}"></script>
      {/foreach}
  {/if}
  {/block}
</body>
</html>
