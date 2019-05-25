<?php
/* Smarty version 3.1.33, created on 2019-04-10 12:16:21
  from 'C:\xampp\htdocs\safe\templates\ajaxModals\addLektor.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadc275963739_65329304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b3d3182b162c9ef3fce2278bc8e17c7d24c050' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\ajaxModals\\addLektor.html.tpl',
      1 => 1547335819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../lektor/lektorForm.html.tpl' => 1,
  ),
),false)) {
function content_5cadc275963739_65329304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5213815395cadc27586fb39_09564125', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2768343975cadc2758aca36_11978968', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6704445225cadc2758e9938_85626509', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5141429825cadc275926837_10917874', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_5213815395cadc27586fb39_09564125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_5213815395cadc27586fb39_09564125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
lektor/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_2768343975cadc2758aca36_11978968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2768343975cadc2758aca36_11978968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy lektor<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6704445225cadc2758e9938_85626509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6704445225cadc2758e9938_85626509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../lektor/lektorForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_5141429825cadc275926837_10917874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_5141429825cadc275926837_10917874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
