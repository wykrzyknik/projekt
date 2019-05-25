<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:28:01
  from 'C:\xampp\htdocs\lab9\templates\kursoferta\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460f316827e1_20439563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b40b22dddf777a4313343c46c9e2e7dc19dc5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kursoferta\\showOne.html.tpl',
      1 => 1548095276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c460f316827e1_20439563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4147532315c460f316633e0_45392807', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17883768205c460f3166b0e9_32237872', 'body');
?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10620232795c460f31676c65_85784904', 'body');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14667642895c460f3167aae7_68887626', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4147532315c460f316633e0_45392807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4147532315c460f316633e0_45392807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o kursoferta<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17883768205c460f3166b0e9_32237872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17883768205c460f3166b0e9_32237872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h3><span style="color:red">Id</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
 </br> <span style="color:blue">Jezyk</span>  <?php echo $_smarty_tpl->tpl_vars['Idjezykaa']->value[$_smarty_tpl->tpl_vars['data']->value['Idjezyka']]['NazwaJezyka'];?>
 </br> <span style="color:red">Nazwaoferty</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Nazwaoferty'];?>
 </br> <span style="color:red">PoziomKursu</span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['PoziomKursu'];?>
 </br> <span style="color:red">Cena</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Cena'];?>
 </br> </h3>
        <p class="text-right">
          <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kursoferta/usun/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń kursoferta
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
class Block_10620232795c460f31676c65_85784904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10620232795c460f31676c65_85784904',
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
class Block_14667642895c460f3167aae7_68887626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14667642895c460f3167aae7_68887626',
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
