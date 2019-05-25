<?php
/* Smarty version 3.1.33, created on 2018-12-06 16:44:48
  from 'C:\xampp\htdocs\Lab8-9\templates\Dom\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0943f0eeae12_86324494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b9e736ddc5b081cdcf879ad48861a2706102fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\Dom\\showAll.html.tpl',
      1 => 1544111085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0943f0eeae12_86324494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11702082095c0943f0edc106_56877222', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17840004675c0943f0edcfb4_88143702', 'checkableFormHeader');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10460022065c0943f0ede868_46245756', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13908063015c0943f0edf317_87147978', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16512162975c0943f0edfd66_52014827', 'tbody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_11702082095c0943f0edc106_56877222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11702082095c0943f0edc106_56877222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Domów<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_8951782525c0943f0edd940_71912021 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="dom/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj dom">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj Dom
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_17840004675c0943f0edcfb4_88143702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_17840004675c0943f0edcfb4_88143702',
  ),
  'groupAction' => 
  array (
    0 => 'Block_8951782525c0943f0edd940_71912021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8951782525c0943f0edd940_71912021', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_10460022065c0943f0ede868_46245756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_10460022065c0943f0ede868_46245756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>IloscPokoi</th>
	<th>Metraz</th>
	<th>NrDomu</th>
	<th>Miasto</th>
	<th>Opis</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_13908063015c0943f0edf317_87147978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_13908063015c0943f0edf317_87147978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_16512162975c0943f0edfd66_52014827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_16512162975c0943f0edfd66_52014827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['IloscPokoi'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Metraz'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['NrDomu'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Miasto'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Opis'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
dom/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
    <button type="button" class="btn btn-danger btn-sm delete-button"
          data-url="dom/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-description="<?php echo $_smarty_tpl->tpl_vars['row']->value['imie'];?>
"
          data-toggle="tooltip" data-placement="top" title="Usuń dom">
          <span class="glyphicon glyphicon-remove" aria-hidden="true">Usuń</span>
    </button>
  </span></td>
<?php
}
}
/* {/block 'tbody'} */
}
