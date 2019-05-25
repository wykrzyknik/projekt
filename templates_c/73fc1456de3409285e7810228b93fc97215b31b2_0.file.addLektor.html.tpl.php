<?php
/* Smarty version 3.1.33, created on 2019-01-13 00:30:24
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\addLektor.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a789078f912_19314051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fc1456de3409285e7810228b93fc97215b31b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\addLektor.html.tpl',
      1 => 1547335819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../lektor/lektorForm.html.tpl' => 1,
  ),
),false)) {
function content_5c3a789078f912_19314051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6153377915c3a7890778207_44300847', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4321312815c3a789077c082_71525057', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11581545395c3a789077ff06_80199030', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3474801725c3a789078ba96_21772777', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_6153377915c3a7890778207_44300847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_6153377915c3a7890778207_44300847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
lektor/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_4321312815c3a789077c082_71525057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4321312815c3a789077c082_71525057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy lektor<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11581545395c3a789077ff06_80199030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11581545395c3a789077ff06_80199030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../lektor/lektorForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_3474801725c3a789078ba96_21772777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_3474801725c3a789078ba96_21772777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
