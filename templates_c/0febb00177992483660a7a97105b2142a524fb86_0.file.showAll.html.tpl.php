<?php
/* Smarty version 3.1.33, created on 2019-04-08 21:38:33
  from 'C:\xampp\htdocs\safe\templates\lektor\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caba3391c0165_81403870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0febb00177992483660a7a97105b2142a524fb86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\lektor\\showAll.html.tpl',
      1 => 1548094907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caba3391c0165_81403870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11205486815caba339189655_21593534', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718416375caba3391951e9_03097384', 'checkableFormHeader');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3329678685caba33919cee7_55629815', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4540294755caba3391a0d68_56205378', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12772620935caba3391a4be9_59950249', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19431204955caba3391bc2e3_70247005', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_11205486815caba339189655_21593534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11205486815caba339189655_21593534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Lektorów<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_4085532575caba339199068_62240351 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="lektor/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj lektor">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj lektor
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_718416375caba3391951e9_03097384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_718416375caba3391951e9_03097384',
  ),
  'groupAction' => 
  array (
    0 => 'Block_4085532575caba339199068_62240351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4085532575caba339199068_62240351', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_3329678685caba33919cee7_55629815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_3329678685caba33919cee7_55629815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<th>id</th>
<th>Nazwisko</th>
<th>Imie</th>
	<th>Telefon</th>
  <th>Email</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_4540294755caba3391a0d68_56205378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_4540294755caba3391a0d68_56205378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th class="searchable">id</th>
  <th class="searchable">Nazwisko</th>
	<th class="searchable">Imie</th>
  <th class="searchable">Telefon</th>
	<th class="searchable">Email</th>
  <th></th>
<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_12772620935caba3391a4be9_59950249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_12772620935caba3391a4be9_59950249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Nazwisko'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Imie'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Telefon'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Email'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
lektor/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="lektor/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj lektor">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
lektor/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń lektor">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_19431204955caba3391bc2e3_70247005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19431204955caba3391bc2e3_70247005',
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
