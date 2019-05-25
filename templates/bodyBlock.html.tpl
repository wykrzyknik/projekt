
<div class="container">
  {if $currentUser != false }
  <div class="menu">
    {block name=menu}
    <ul>
        <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}opis/"><span class="glyphicon glyphicon-home"></span>Home</a>
          <li><a href=""><span class="glyphicon glyphicon-user"></span>User</a>
            <ul>
              <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/"><span class="glyphicon glyphicon-plus"></span>Add</a></li>
              <li><a href=""><span class="glyphicon glyphicon-edit"></span>Edit</a></li>
              <li><a href=""><span class="glyphicon glyphicon-remove"></span>Delete</a></li>
            </ul>
          </li>
    </ul>

    {/block}
  </div>
  {elseif $currentUser != false }
  <div class="menu">
    {block name=menu}
    <ul>
        <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}test3/"><span class="glyphicon glyphicon-home"></span>Home</a>
          <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/"><span class="glyphicon glyphicon-user"></span>User</a>
            <ul>
              <li><a href=""><span class="glyphicon glyphicon-plus"></span>Add</a></li>
              <li><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}jezyk/"><span class="glyphicon glyphicon-edit"></span>Edit</a></li>
              <li><a href=""><span class="glyphicon glyphicon-remove"></span>Delete</a></li>
            </ul>
          </li>
    </ul>
    {/block}
  </div>
  {/if}
  <div class="page-header">
    <h1>{block name=title}Błąd{/block}</h1>
  </div>

  {include file='./flashMessage.html.tpl'}

  {block name=body}
  {/block}
</div>
{include file='./modals/base.html.tpl'}
