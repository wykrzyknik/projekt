<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:19:50
  from 'C:\xampp\htdocs\lab9\templates\lektor\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460d46cbc026_15878995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1886b175774e2ff5f5c9764a7d0f7d2c8f32d71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\lektor\\showOne.html.tpl',
      1 => 1548094785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c460d46cbc026_15878995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12164398935c460d46c85513_73454143', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6915265965c460d46c910a1_78165634', 'body');
?>

<?php }
if ($_smarty_tpl->tpl_vars['currentUser']->value == false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18246569895c460d46cb4325_06179397', 'body');
?>

<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7957745325c460d46cb81a2_98638308', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_12164398935c460d46c85513_73454143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12164398935c460d46c85513_73454143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o lektor<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6915265965c460d46c910a1_78165634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6915265965c460d46c910a1_78165634',
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
lektor/usun/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
class Block_18246569895c460d46cb4325_06179397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18246569895c460d46cb4325_06179397',
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
class Block_7957745325c460d46cb81a2_98638308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7957745325c460d46cb81a2_98638308',
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
