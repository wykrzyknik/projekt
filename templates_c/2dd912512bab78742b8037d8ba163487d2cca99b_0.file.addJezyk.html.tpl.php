<?php
/* Smarty version 3.1.33, created on 2019-01-03 19:35:01
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\addJezyk.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e55d5039899_74938153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd912512bab78742b8037d8ba163487d2cca99b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\addJezyk.html.tpl',
      1 => 1546457999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../jezyk/jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5c2e55d5039899_74938153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8680354765c2e55d4eef277_74669786', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9206053805c2e55d4f2da85_54476484', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7628785145c2e55d4f31906_22348627', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20290821705c2e55d5035a13_14973559', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_8680354765c2e55d4eef277_74669786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_8680354765c2e55d4eef277_74669786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
jezyk/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_9206053805c2e55d4f2da85_54476484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9206053805c2e55d4f2da85_54476484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7628785145c2e55d4f31906_22348627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7628785145c2e55d4f31906_22348627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../jezyk/jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_20290821705c2e55d5035a13_14973559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_20290821705c2e55d5035a13_14973559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
