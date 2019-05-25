<?php
/* Smarty version 3.1.33, created on 2019-04-10 12:15:50
  from 'C:\xampp\htdocs\safe\templates\kurs\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadc256dd6552_76501147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa5efcc900f222bcfaf779cdafd2303ffafc062' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\kurs\\showOne.html.tpl',
      1 => 1548095446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5cadc256dd6552_76501147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12185847455cadc256dab5d1_82887460', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8612427855cadc256db32d1_64041392', 'body');
?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13314822755cadc256dce857_00569518', 'body');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13600513885cadc256dd26d6_04750122', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_12185847455cadc256dab5d1_82887460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12185847455cadc256dab5d1_82887460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o kurs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8612427855cadc256db32d1_64041392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8612427855cadc256db32d1_64041392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">

        <h4><span style="color:red">Id</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
 </br> <span style="color:blue">Nazwa kursoferta</span>  <?php echo $_smarty_tpl->tpl_vars['Idkursofertaa']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursuoferta']]['Nazwaoferty'];?>
 </br> <span style="color:blue">Poziom kursoferta</span>  <?php echo $_smarty_tpl->tpl_vars['Idkursofertaa']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursuoferta']]['PoziomKursu'];?>
 </br> <span style="color:blue">Cena kursoferta</span>  <?php echo $_smarty_tpl->tpl_vars['Idkursofertaa']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursuoferta']]['Cena'];?>
 </br> <span style="color:green">Imie i Nazwisko Lektora</span> <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Nazwisko'];?>
 </br> <span style="color:green">Telefon Lektora</span> <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Telefon'];?>
 </br> <span style="color:green">Email Lektora</span> <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Email'];?>
 </br> <span style="color:green">Adres zamieszkania Lektora</span> <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Miasto'];?>
 , <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Ulica'];?>
 <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Numerdomu'];?>
/<?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['data']->value['Idlektora']]['Numerlokalu'];?>
 </br>  <span style="color:red">Maksymalna_liczba_os</span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['Maksymalna_liczba_os'];?>
 </br> <span style="color:red">Nrsali</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Nrsali'];?>
 </br> <span style="color:red">data_rozpoczecia</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['data_rozpoczecia'];?>
 <span style="color:red">data_zakonczenia</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['data_zakonczenia'];?>
 </h3>
        <p class="text-right">
          <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kurs/usun/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń kurs
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
class Block_13314822755cadc256dce857_00569518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13314822755cadc256dce857_00569518',
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
class Block_13600513885cadc256dd26d6_04750122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13600513885cadc256dd26d6_04750122',
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
