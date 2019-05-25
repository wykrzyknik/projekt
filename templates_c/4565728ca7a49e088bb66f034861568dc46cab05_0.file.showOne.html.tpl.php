<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:30:57
  from 'C:\xampp\htdocs\lab9\templates\kurs\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460fe15deaf4_04234990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4565728ca7a49e088bb66f034861568dc46cab05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kurs\\showOne.html.tpl',
      1 => 1548095446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c460fe15deaf4_04234990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14342854385c460fe148eba4_12845572', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9147295155c460fe149a727_59784030', 'body');
?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16416301635c460fe14cd3b4_43137677', 'body');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21438837685c460fe14d50b2_99704425', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_14342854385c460fe148eba4_12845572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14342854385c460fe148eba4_12845572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o kurs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9147295155c460fe149a727_59784030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9147295155c460fe149a727_59784030',
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
class Block_16416301635c460fe14cd3b4_43137677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16416301635c460fe14cd3b4_43137677',
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
class Block_21438837685c460fe14d50b2_99704425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21438837685c460fe14d50b2_99704425',
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
