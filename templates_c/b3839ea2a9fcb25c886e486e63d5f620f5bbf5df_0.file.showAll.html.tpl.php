<?php
/* Smarty version 3.1.33, created on 2019-05-20 15:47:23
  from 'C:\xampp\htdocs\safe\templates\jezyk\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce2afeb08f2b4_21031324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3839ea2a9fcb25c886e486e63d5f620f5bbf5df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\jezyk\\showAll.html.tpl',
      1 => 1558360041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce2afeb08f2b4_21031324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20714173005ce2afeb0681a6_03701661', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8999259275ce2afeb06c021_18057177', 'checkableFormHeader');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14951593125ce2afeb073d21_34253367', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12023482545ce2afeb077ba6_28124533', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12732373185ce2afeb07ba28_43878792', 'tbody');
?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18228434105ce2afeb08b439_73357197', 'body');
?>


<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_20714173005ce2afeb0681a6_03701661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20714173005ce2afeb0681a6_03701661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_12307250095ce2afeb06fea8_51478424 extends Smarty_Internal_Block
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
class Block_8999259275ce2afeb06c021_18057177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_8999259275ce2afeb06c021_18057177',
  ),
  'groupAction' => 
  array (
    0 => 'Block_12307250095ce2afeb06fea8_51478424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12307250095ce2afeb06fea8_51478424', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_14951593125ce2afeb073d21_34253367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_14951593125ce2afeb073d21_34253367',
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
class Block_12023482545ce2afeb077ba6_28124533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_12023482545ce2afeb077ba6_28124533',
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
class Block_12732373185ce2afeb07ba28_43878792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_12732373185ce2afeb07ba28_43878792',
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
class Block_18228434105ce2afeb08b439_73357197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18228434105ce2afeb08b439_73357197',
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
