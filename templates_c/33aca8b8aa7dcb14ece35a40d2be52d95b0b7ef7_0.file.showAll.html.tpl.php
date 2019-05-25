<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:31:29
  from 'C:\xampp\htdocs\lab9\templates\kurs\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4610011da9e2_55121279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33aca8b8aa7dcb14ece35a40d2be52d95b0b7ef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kurs\\showAll.html.tpl',
      1 => 1548095487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4610011da9e2_55121279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10299719605c4610011a7d57_88278236', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18515288785c4610011afa53_77622796', 'checkableFormHeader');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10365696795c4610011b7751_81390106', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10290417385c4610011bb5d9_35022096', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15773216655c4610011bf464_89185321', 'tbody');
?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20808873875c4610011d2ce3_33150858', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_10299719605c4610011a7d57_88278236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10299719605c4610011a7d57_88278236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Kursów<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_11787426685c4610011b38d9_49966342 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="kurs/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj kurs">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj Kurs
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_18515288785c4610011afa53_77622796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_18515288785c4610011afa53_77622796',
  ),
  'groupAction' => 
  array (
    0 => 'Block_11787426685c4610011b38d9_49966342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11787426685c4610011b38d9_49966342', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_10365696795c4610011b7751_81390106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_10365696795c4610011b7751_81390106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th>id</th>
<th>Ofertakursu</th>
	<th>Lektor</th>
	<th>data_rozpoczecia:</th>
	<th>data_zakonczenia:</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_10290417385c4610011bb5d9_35022096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_10290417385c4610011bb5d9_35022096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<th class="searchable">id</th>
  <th class="searchable">Ofertakursu</th>
  <th class="searchable">Lektor</th>
	<th class="searchable">data_rozpoczecia</th>
  <th class="searchable">data_zakonczenia</th>
  <th></th>
<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_15773216655c4610011bf464_89185321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_15773216655c4610011bf464_89185321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Idkursofertaa']->value[$_smarty_tpl->tpl_vars['row']->value['Idkursuoferta']]['Nazwaoferty'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['row']->value['Idlektora']]['Nazwisko'];?>
 <?php echo $_smarty_tpl->tpl_vars['Idlektoraa']->value[$_smarty_tpl->tpl_vars['row']->value['Idlektora']]['Imie'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['data_rozpoczecia'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['data_zakonczenia'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kurs/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="kurs/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj kurs">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kurs/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń kurs">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_20808873875c4610011d2ce3_33150858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20808873875c4610011d2ce3_33150858',
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
