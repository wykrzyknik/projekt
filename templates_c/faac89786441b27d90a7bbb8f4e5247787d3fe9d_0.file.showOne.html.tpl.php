<?php
/* Smarty version 3.1.33, created on 2019-01-23 22:08:39
  from 'C:\xampp\htdocs\lab9\templates\kursuczestnik\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c48d7d77837e9_65443969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faac89786441b27d90a7bbb8f4e5247787d3fe9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kursuczestnik\\showOne.html.tpl',
      1 => 1548277717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c48d7d77837e9_65443969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4355434225c48d7d77549e9_29633212', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16581407575c48d7d775c6e5_53932723', 'body');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13106040415c48d7d7777c66_77475801', 'body');
?>

<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17628330225c48d7d777f961_55196182', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4355434225c48d7d77549e9_29633212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4355434225c48d7d77549e9_29633212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o kursuczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16581407575c48d7d775c6e5_53932723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16581407575c48d7d775c6e5_53932723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h4><span style="color:red">Id</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
 </br> <span style="color:blue">Data rozpoczecia / Zakonczenia kursu</span>  <?php echo $_smarty_tpl->tpl_vars['Idkursuu']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursu']]['data_rozpoczecia'];?>
 / <?php echo $_smarty_tpl->tpl_vars['Idkursuu']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursu']]['data_rozpoczecia'];?>
 </br> <span style="color:blue">Kurs Maksymalna_liczba_os</span>  <?php echo $_smarty_tpl->tpl_vars['Idkursuu']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursu']]['Maksymalna_liczba_os'];?>
 </br> <span style="color:blue">Kurs NrSali</span>  <?php echo $_smarty_tpl->tpl_vars['Idkursuu']->value[$_smarty_tpl->tpl_vars['data']->value['Idkursu']]['Nrsali'];?>
  </br>  <span style="color:green">Nazwisko Imie Uczestnika</span> <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Nazwisko'];?>
 <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Imie'];?>
 </br> <span style="color:green">Data_ur Uczestnika</span> <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Data_ur'];?>
 </br> <span style="color:green">PESEL Uczestnika </span> <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['PESEL'];?>
 </br>  <span style="color:green">Telefon Uczestnika </span> <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Telefon'];?>
 </br>  <span style="color:green">Email Uczestnika </span> <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Email'];?>
 </br> <span style="color:green">Adres Uczestnika </span> <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Miasto'];?>
 <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']]['Numerlokalu'];?>
 </br> <span style="color:red">Oplacano</span>  <?php echo $_smarty_tpl->tpl_vars['data']->value['Oplacano'];?>
 </br> <span style="color:red">Opis</span> <?php echo $_smarty_tpl->tpl_vars['data']->value['Opis'];?>
 </br> </h4>
        <p class="text-right">
          <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kursuczestnik/usun/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń kursuczestnik
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
class Block_13106040415c48d7d7777c66_77475801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13106040415c48d7d7777c66_77475801',
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
class Block_17628330225c48d7d777f961_55196182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17628330225c48d7d777f961_55196182',
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
