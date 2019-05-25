<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:01:03
  from 'C:\xampp\htdocs\Lab8-9\templates\Nieruchomosc\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0947bfe41b22_18235352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f49058e78af0723b18adb723eaec5373cc3a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\Nieruchomosc\\showAll.html.tpl',
      1 => 1544112062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0947bfe41b22_18235352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18861263445c0947bfe2eca9_33039623', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_802550975c0947bfe2fb29_64688048', 'checkableFormHeader');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12676459865c0947bfe31391_30287818', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18023162175c0947bfe31e81_69863834', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4251099335c0947bfe328d3_91140483', 'tbody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_18861263445c0947bfe2eca9_33039623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18861263445c0947bfe2eca9_33039623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Nieruchomosci<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_5523622745c0947bfe30482_68949123 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="nieruchomosc/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj nieruchomosc">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj Nieruchomość
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_802550975c0947bfe2fb29_64688048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_802550975c0947bfe2fb29_64688048',
  ),
  'groupAction' => 
  array (
    0 => 'Block_5523622745c0947bfe30482_68949123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5523622745c0947bfe30482_68949123', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_12676459865c0947bfe31391_30287818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_12676459865c0947bfe31391_30287818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>IdPracownik</th>
	<th>IdKlient</th>
	<th>ulica</th>
	<th>kodPocztowy</th>
  <th>miejscowosc</th>
	<th>CenaCalkowita</th>
	<th>CenaJednostkowa</th>
  <th>NumerKW</th>
	<th>Nazwa</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_18023162175c0947bfe31e81_69863834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_18023162175c0947bfe31e81_69863834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_4251099335c0947bfe328d3_91140483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_4251099335c0947bfe328d3_91140483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['IdPracownik'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ulica'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['kodPocztowy'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['miejscowosc'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['CenaCalkowita'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['CenaJednostkowa'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['NumerKW'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Nazwa'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
nieruchomosc/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
    <button type="button" class="btn btn-danger btn-sm delete-button"
          data-url="nieruchomosc/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-description="<?php echo $_smarty_tpl->tpl_vars['row']->value['Nazwa'];?>
"
          data-toggle="tooltip" data-placement="top" title="Usuń pracownik">
          <span class="glyphicon glyphicon-remove" aria-hidden="true">Usuń</span>
    </button>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
}
