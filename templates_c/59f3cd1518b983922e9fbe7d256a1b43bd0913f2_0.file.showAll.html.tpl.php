<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:03:13
  from 'C:\xampp\htdocs\Lab8-9\templates\Klient\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0948414adcb1_24971235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f3cd1518b983922e9fbe7d256a1b43bd0913f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\Klient\\showAll.html.tpl',
      1 => 1544112191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0948414adcb1_24971235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19074420395c09484149bd90_19176391', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14942090935c09484149cb72_98429418', 'checkableFormHeader');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11681229005c09484149e333_29933486', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3950098105c09484149edb8_44166122', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_441398955c09484149f799_04170482', 'tbody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_19074420395c09484149bd90_19176391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19074420395c09484149bd90_19176391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Klientów<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_1841764815c09484149d471_67041051 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="klient/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj klient">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj klienta
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_14942090935c09484149cb72_98429418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_14942090935c09484149cb72_98429418',
  ),
  'groupAction' => 
  array (
    0 => 'Block_1841764815c09484149d471_67041051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1841764815c09484149d471_67041051', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_11681229005c09484149e333_29933486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_11681229005c09484149e333_29933486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Imie</th>
	<th>nazwisko</th>
	<th>ulica</th>
	<th>nrLokalu</th>
	<th>nrMieszkania</th>
	<th>miejscowosc</th>
	<th>kodPocztowy</th>
	<th>Poczta</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_3950098105c09484149edb8_44166122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_3950098105c09484149edb8_44166122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_441398955c09484149f799_04170482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_441398955c09484149f799_04170482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['imie'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nazwisko'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ulica'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nrLokalu'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nrMieszkania'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['miejscowosc'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['kodPocztowy'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Poczta'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
klient/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
    <button type="button" class="btn btn-danger btn-sm delete-button"
          data-url="klient/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-description="<?php echo $_smarty_tpl->tpl_vars['row']->value['imie'];?>
"
          data-toggle="tooltip" data-placement="top" title="Usuń klient">
          <span class="glyphicon glyphicon-remove" aria-hidden="true">Usuń</span>
    </button>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
}
