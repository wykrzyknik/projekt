<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:08:05
  from 'C:\xampp\htdocs\lab9\templates\uczestnik\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460a853a27c0_14449741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3587a0101a88583ed8a3a1a3d83df3569b3809b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\uczestnik\\showOne.html.tpl',
      1 => 1548094084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c460a853a27c0_14449741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18912763535c460a8536fb49_40152510', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13376131915c460a8537b6c6_75706106', 'body');
?>

<?php }
if ($_smarty_tpl->tpl_vars['currentUser']->value == false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20774376715c460a8538ef41_59646030', 'body');
?>

<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13693811755c460a85392dc3_90037161', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_18912763535c460a8536fb49_40152510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18912763535c460a8536fb49_40152510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o uczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13376131915c460a8537b6c6_75706106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13376131915c460a8537b6c6_75706106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h4><span style="color:red">Id</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
 </br> <span style="color:red">Nazwisko</span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['Nazwisko'];?>
 </br> <span style="color:red">Imie</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Imie'];?>
 </br> <span style="color:red">Data_ur</span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['Data_ur'];?>
 </br> <span style="color:red">PESEL</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['PESEL'];?>
 </br> <span style="color:red">Kod_pocztowy</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Kod_pocztowy'];?>
 </br> <span style="color:red">Miasto</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Miasto'];?>
 </br> <span style="color:red">Ulica</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Ulica'];?>
 </br> <span style="color:red">Numerlokalu</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Numerlokalu'];?>
 </br> <span style="color:red">Telefon</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Telefon'];?>
 </br> <span style="color:red">Email</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Email'];?>
 </br></h3>
        <p class="text-right">
          <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
uczestnik/usun/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń lektor
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'body'} */
/* {block 'body'} */
class Block_20774376715c460a8538ef41_59646030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20774376715c460a8538ef41_59646030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h4><span style="color:red">Błąd podczas wejścia na podaną strone:  </span></h4></br>
<h5><span style="color:green">Nie jesteś zalogowany/a na strone. Musisz być zalogowany ,aby uzyskać dostęp do tej strony  </span></h5></br></br>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-logowania/" type="button">Zaloguj się</a></br>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-rejestracji/" type="button">Rejestracja</a></br>

<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_13693811755c460a85392dc3_90037161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13693811755c460a85392dc3_90037161',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:../modals/deleteConfirmBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
