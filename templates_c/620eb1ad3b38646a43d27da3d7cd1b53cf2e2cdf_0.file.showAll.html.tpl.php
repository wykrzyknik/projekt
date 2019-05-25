<?php
/* Smarty version 3.1.33, created on 2019-01-21 19:32:58
  from 'C:\xampp\htdocs\lab9\templates\jezyk\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c46105a5af7f8_37305511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620eb1ad3b38646a43d27da3d7cd1b53cf2e2cdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\jezyk\\showAll.html.tpl',
      1 => 1548095574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c46105a5af7f8_37305511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12087544075c46105a56d168_56668510', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20621471655c46105a57cb62_36691317', 'checkableFormHeader');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14357614925c46105a584862_45897074', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1644557305c46105a5886e2_96771092', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14921082165c46105a5903e5_55487868', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12664734535c46105a5ab979_13939298', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_12087544075c46105a56d168_56668510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12087544075c46105a56d168_56668510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_11388990415c46105a5809e9_11923052 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="jezyk/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj jezyk">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj jezyk
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_20621471655c46105a57cb62_36691317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_20621471655c46105a57cb62_36691317',
  ),
  'groupAction' => 
  array (
    0 => 'Block_11388990415c46105a5809e9_11923052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11388990415c46105a5809e9_11923052', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_14357614925c46105a584862_45897074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_14357614925c46105a584862_45897074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>id</th>
	<th>NazwaJezyka</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_1644557305c46105a5886e2_96771092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_1644557305c46105a5886e2_96771092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <th class="searchable">id</th>
  <th class="searchable">NazwaJezyka</th>
  <th></th>
<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_14921082165c46105a5903e5_55487868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_14921082165c46105a5903e5_55487868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['NazwaJezyka'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true"></span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="jezyk/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj jezyk">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń jezyk">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>




  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_12664734535c46105a5ab979_13939298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12664734535c46105a5ab979_13939298',
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
