<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:21:49
  from 'C:\xampp\htdocs\lab9\templates\lektor\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460dbd0c87c8_95233371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a09309274b4a6556ed7f33a143b82566caf52155' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\lektor\\showAll.html.tpl',
      1 => 1548094907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c460dbd0c87c8_95233371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20912091845c460dbd0999b4_86488781', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5031763215c460dbd0a5531_33878962', 'checkableFormHeader');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6409385105c460dbd0ad231_93972873', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6178993265c460dbd0b10b1_90304793', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10102719615c460dbd0b4f48_93954508', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12645009825c460dbd0c4948_78096149', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_20912091845c460dbd0999b4_86488781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20912091845c460dbd0999b4_86488781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Lektorów<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_3788917185c460dbd0a93b3_79955233 extends Smarty_Internal_Block
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
class Block_5031763215c460dbd0a5531_33878962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_5031763215c460dbd0a5531_33878962',
  ),
  'groupAction' => 
  array (
    0 => 'Block_3788917185c460dbd0a93b3_79955233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3788917185c460dbd0a93b3_79955233', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_6409385105c460dbd0ad231_93972873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_6409385105c460dbd0ad231_93972873',
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
class Block_6178993265c460dbd0b10b1_90304793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_6178993265c460dbd0b10b1_90304793',
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
class Block_10102719615c460dbd0b4f48_93954508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_10102719615c460dbd0b4f48_93954508',
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
class Block_12645009825c460dbd0c4948_78096149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12645009825c460dbd0c4948_78096149',
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
