<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:27:00
  from 'C:\xampp\htdocs\lab9\templates\kursuczestnik\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c460ef48af368_09772021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2baf64d75342f6aac2ca2acc4e4c23068bef75a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kursuczestnik\\showAll.html.tpl',
      1 => 1548095216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c460ef48af368_09772021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7460426875c460ef487c6d6_58052188', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3297640755c460ef4888255_51781230', 'checkableFormHeader');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18269200265c460ef488ff52_56813776', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19838279385c460ef4893dd6_24070487', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12191909745c460ef4897c52_69082446', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10618062315c460ef48a7651_97481556', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_7460426875c460ef487c6d6_58052188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7460426875c460ef487c6d6_58052188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Kursuczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_12735320195c460ef488c0d2_45133087 extends Smarty_Internal_Block
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
class Block_3297640755c460ef4888255_51781230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_3297640755c460ef4888255_51781230',
  ),
  'groupAction' => 
  array (
    0 => 'Block_12735320195c460ef488c0d2_45133087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12735320195c460ef488c0d2_45133087', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_18269200265c460ef488ff52_56813776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_18269200265c460ef488ff52_56813776',
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
class Block_19838279385c460ef4893dd6_24070487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_19838279385c460ef4893dd6_24070487',
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
class Block_12191909745c460ef4897c52_69082446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_12191909745c460ef4897c52_69082446',
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
class Block_10618062315c460ef48a7651_97481556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10618062315c460ef48a7651_97481556',
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
