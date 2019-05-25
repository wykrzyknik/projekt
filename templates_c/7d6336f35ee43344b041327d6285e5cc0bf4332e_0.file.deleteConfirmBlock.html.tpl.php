<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:06:31
  from 'C:\xampp\htdocs\Lab8-9\templates\modals\deleteConfirmBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0949078e1ed8_35452735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d6336f35ee43344b041327d6285e5cc0bf4332e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\modals\\deleteConfirmBlock.html.tpl',
      1 => 1544112387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./formBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c0949078e1ed8_35452735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11110764405c0949078dbf82_35535657', 'id');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9964216515c0949078dd111_89269713', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4346648165c0949078ddd41_94951401', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12399357725c0949078e15d2_88288691', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./base.html.tpl");
}
/* {block 'id'} */
class Block_11110764405c0949078dbf82_35535657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_11110764405c0949078dbf82_35535657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
delete-confirm-modal<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_9964216515c0949078dd111_89269713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9964216515c0949078dd111_89269713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Usuwanie danych<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_4346648165c0949078ddd41_94951401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4346648165c0949078ddd41_94951401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:./formBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
/* {block 'acceptButton'} */
class Block_12399357725c0949078e15d2_88288691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_12399357725c0949078e15d2_88288691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button type="submit" class="btn btn-danger">Usuń</button>
<?php
}
}
/* {/block 'acceptButton'} */
}
