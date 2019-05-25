<?php
/* Smarty version 3.1.33, created on 2019-04-08 21:38:36
  from 'C:\xampp\htdocs\safe\templates\kurs\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caba33c08c251_41205082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18932db9e0c809164e2af0bdec1a1613e6d686ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\kurs\\showAll.html.tpl',
      1 => 1548095487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caba33c08c251_41205082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764640125caba33c045d40_32243183', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18528886455caba33c04da43_88025324', 'checkableFormHeader');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20202810765caba33c055745_81929993', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1757949235caba33c0595c7_57872470', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5864551675caba33c05d455_96280587', 'tbody');
?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1617622525caba33c0883d5_52207810', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_1764640125caba33c045d40_32243183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1764640125caba33c045d40_32243183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Kursów<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_19158567265caba33c0518c5_81862170 extends Smarty_Internal_Block
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
class Block_18528886455caba33c04da43_88025324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_18528886455caba33c04da43_88025324',
  ),
  'groupAction' => 
  array (
    0 => 'Block_19158567265caba33c0518c5_81862170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19158567265caba33c0518c5_81862170', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_20202810765caba33c055745_81929993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_20202810765caba33c055745_81929993',
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
class Block_1757949235caba33c0595c7_57872470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_1757949235caba33c0595c7_57872470',
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
class Block_5864551675caba33c05d455_96280587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_5864551675caba33c05d455_96280587',
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
class Block_1617622525caba33c0883d5_52207810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1617622525caba33c0883d5_52207810',
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
