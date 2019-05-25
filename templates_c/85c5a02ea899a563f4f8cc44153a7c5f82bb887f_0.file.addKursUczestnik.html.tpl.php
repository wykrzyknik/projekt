<?php
/* Smarty version 3.1.33, created on 2019-01-13 21:44:49
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\addKursUczestnik.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3ba3410c8d74_57317275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85c5a02ea899a563f4f8cc44153a7c5f82bb887f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\addKursUczestnik.html.tpl',
      1 => 1547411407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kursuczestnik/kursuczestnikForm.html.tpl' => 1,
  ),
),false)) {
function content_5c3ba3410c8d74_57317275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7451961075c3ba34107e9e0_09180923', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11156213525c3ba341082863_67997596', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12215064705c3ba3410866e9_80645511', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2647839235c3ba3410c4ef1_43295126', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_7451961075c3ba34107e9e0_09180923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_7451961075c3ba34107e9e0_09180923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kursuczestnik/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_11156213525c3ba341082863_67997596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11156213525c3ba341082863_67997596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy kursuczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12215064705c3ba3410866e9_80645511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12215064705c3ba3410866e9_80645511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../kursuczestnik/kursuczestnikForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_2647839235c3ba3410c4ef1_43295126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_2647839235c3ba3410c4ef1_43295126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
