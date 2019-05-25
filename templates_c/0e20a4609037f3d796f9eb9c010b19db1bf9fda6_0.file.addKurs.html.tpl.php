<?php
/* Smarty version 3.1.33, created on 2019-04-10 12:16:31
  from 'C:\xampp\htdocs\safe\templates\ajaxModals\addKurs.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadc27f56fa61_10291928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e20a4609037f3d796f9eb9c010b19db1bf9fda6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\ajaxModals\\addKurs.html.tpl',
      1 => 1546466775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kurs/kursForm.html.tpl' => 1,
  ),
),false)) {
function content_5cadc27f56fa61_10291928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14264457385cadc27f47be60_57435596', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19578962325cadc27f4b8d67_07066891', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11246902915cadc27f4f5c62_52092588', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10545862555cadc27f532b63_34460521', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_14264457385cadc27f47be60_57435596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_14264457385cadc27f47be60_57435596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kurs/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_19578962325cadc27f4b8d67_07066891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19578962325cadc27f4b8d67_07066891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy kurs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11246902915cadc27f4f5c62_52092588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11246902915cadc27f4f5c62_52092588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../kurs/kursForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_10545862555cadc27f532b63_34460521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_10545862555cadc27f532b63_34460521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
