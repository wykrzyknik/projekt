<?php
/* Smarty version 3.1.33, created on 2019-04-08 21:38:43
  from 'C:\xampp\htdocs\safe\templates\kursuczestnik\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caba3434e70e7_57790105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02890208d7ab36e07ece7e67188633d13e89017' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\kursuczestnik\\showAll.html.tpl',
      1 => 1548095216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caba3434e70e7_57790105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18266425335caba3434911d5_77880366', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122391155caba3434a88d4_85217621', 'checkableFormHeader');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18183388505caba3434b05d3_08850362', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6004287655caba3434b4453_02680341', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16543516555caba3434b82d7_43982130', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18610514175caba3434e3262_28914282', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_18266425335caba3434911d5_77880366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18266425335caba3434911d5_77880366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Kursuczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_19301807785caba3434ac752_64917750 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="kursuczestnik/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj Kursuczestnik">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj Kursuczestnik
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_122391155caba3434a88d4_85217621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_122391155caba3434a88d4_85217621',
  ),
  'groupAction' => 
  array (
    0 => 'Block_19301807785caba3434ac752_64917750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19301807785caba3434ac752_64917750', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_18183388505caba3434b05d3_08850362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_18183388505caba3434b05d3_08850362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<th>id</th>
<th>Data rozpoczecia/ zakończenia kursu</th>
	<th>Nazwisko i Imie uczestnika</th>
	<th>Oplacano</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_6004287655caba3434b4453_02680341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_6004287655caba3434b4453_02680341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th class="searchable">id</th>
  <th class="searchable">Data rozpoczecia/ zakończenia kursu</th>
  <th class="searchable">Nazwisko i Imie uczestnika</th>
	<th class="searchable">Oplacano</th>
  <th></th>
<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_16543516555caba3434b82d7_43982130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_16543516555caba3434b82d7_43982130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['Idkursuu']->value[$_smarty_tpl->tpl_vars['row']->value['Idkursu']]['data_rozpoczecia'];?>
 / <?php echo $_smarty_tpl->tpl_vars['Idkursuu']->value[$_smarty_tpl->tpl_vars['row']->value['Idkursu']]['data_rozpoczecia'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['row']->value['Iduczestnika']]['Nazwisko'];?>
 <?php echo $_smarty_tpl->tpl_vars['Iduczestnikaa']->value[$_smarty_tpl->tpl_vars['row']->value['Iduczestnika']]['Imie'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Oplacano'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kursuczestnik/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="kursuczestnik/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj kursuczestnik">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kursuczestnik/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń kursuczestnik">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_18610514175caba3434e3262_28914282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18610514175caba3434e3262_28914282',
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
}
