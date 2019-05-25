<?php
/* Smarty version 3.1.33, created on 2019-01-13 19:02:54
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\addKursOferta.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3b7d4e2d9843_73369425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323bd667960a58ff95e3bbdf37d98568a85ae328' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\addKursOferta.html.tpl',
      1 => 1547401856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kursoferta/kursofertaForm.html.tpl' => 1,
  ),
),false)) {
function content_5c3b7d4e2d9843_73369425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14060993965c3b7d4e283932_47534297', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11494720685c3b7d4e2877b8_01890141', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10880304165c3b7d4e28b633_94535976', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19901444115c3b7d4e2d59c7_79120800', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_14060993965c3b7d4e283932_47534297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_14060993965c3b7d4e283932_47534297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kursoferta/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_11494720685c3b7d4e2877b8_01890141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11494720685c3b7d4e2877b8_01890141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy kursoferta<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_10880304165c3b7d4e28b633_94535976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10880304165c3b7d4e28b633_94535976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../kursoferta/kursofertaForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_19901444115c3b7d4e2d59c7_79120800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_19901444115c3b7d4e2d59c7_79120800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
