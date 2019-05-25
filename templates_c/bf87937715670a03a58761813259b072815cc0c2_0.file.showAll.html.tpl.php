<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:14:47
  from 'C:\xampp\htdocs\lab9\templates\uczestnik\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460c17018282_42875440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf87937715670a03a58761813259b072815cc0c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\uczestnik\\showAll.html.tpl',
      1 => 1548094485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c460c17018282_42875440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5361852625c460c16f1fcf6_42763440', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17355223665c460c16f2b871_82015447', 'checkableFormHeader');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12067957445c460c16f33584_57278978', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11209092135c460c16f37401_33908873', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3090635815c460c16f3b287_98902908', 'tbody');
?>




<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18879685035c460c17014403_36915932', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_5361852625c460c16f1fcf6_42763440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5361852625c460c16f1fcf6_42763440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Uczestników<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_18710327125c460c16f2f706_23846151 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="uczestnik/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj Uczestnik">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj uczestnik
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_17355223665c460c16f2b871_82015447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_17355223665c460c16f2b871_82015447',
  ),
  'groupAction' => 
  array (
    0 => 'Block_18710327125c460c16f2f706_23846151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18710327125c460c16f2f706_23846151', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_12067957445c460c16f33584_57278978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_12067957445c460c16f33584_57278978',
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
class Block_11209092135c460c16f37401_33908873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_11209092135c460c16f37401_33908873',
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
class Block_3090635815c460c16f3b287_98902908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_3090635815c460c16f3b287_98902908',
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
uczestnik/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="uczestnik/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj uczestnik">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
uczestnik/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń uczestnik">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_18879685035c460c17014403_36915932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18879685035c460c17014403_36915932',
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
