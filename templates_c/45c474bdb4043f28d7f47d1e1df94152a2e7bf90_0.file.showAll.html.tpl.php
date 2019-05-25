<?php
/* Smarty version 3.1.33, created on 2018-12-06 16:32:44
  from 'C:\xampp\htdocs\Lab8-9\templates\Pracownik\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c09411cea3160_43268881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c474bdb4043f28d7f47d1e1df94152a2e7bf90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\Pracownik\\showAll.html.tpl',
      1 => 1544110231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c09411cea3160_43268881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13953201385c09411ce94fa9_17762105', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15582900035c09411ce95c99_72001578', 'checkableFormHeader');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21414108415c09411ce973b3_91354068', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1825548005c09411ce97dd3_47010544', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8949445945c09411ce98795_17383525', 'tbody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_13953201385c09411ce94fa9_17762105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13953201385c09411ce94fa9_17762105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Pracowników<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_15223357395c09411ce96543_76317378 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="pracownik/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj pracownik">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Dodaj Pracownika
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_15582900035c09411ce95c99_72001578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_15582900035c09411ce95c99_72001578',
  ),
  'groupAction' => 
  array (
    0 => 'Block_15223357395c09411ce96543_76317378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15223357395c09411ce96543_76317378', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_21414108415c09411ce973b3_91354068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_21414108415c09411ce973b3_91354068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Imie</th>
	<th>nazwisko</th>
	<th>stanowisko</th>
	<th>telefon</th>
	<th>email</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_1825548005c09411ce97dd3_47010544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_1825548005c09411ce97dd3_47010544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_8949445945c09411ce98795_17383525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_8949445945c09411ce98795_17383525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['imie'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nazwisko'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['stanowisko'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefon'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
pracownik/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true">Szczegóły</span>
		</a>
    <button type="button" class="btn btn-danger btn-sm delete-button"
          data-url="pracownik/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-description="<?php echo $_smarty_tpl->tpl_vars['row']->value['imie'];?>
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
