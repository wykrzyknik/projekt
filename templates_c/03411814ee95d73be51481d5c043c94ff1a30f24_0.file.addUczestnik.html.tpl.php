<?php
/* Smarty version 3.1.33, created on 2019-01-14 01:51:41
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\addUczestnik.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3bdd1debc218_66785004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03411814ee95d73be51481d5c043c94ff1a30f24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\addUczestnik.html.tpl',
      1 => 1547426509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../uczestnik/uczestnikForm.html.tpl' => 1,
  ),
),false)) {
function content_5c3bdd1debc218_66785004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4294303685c3bdd1de2b978_11260057', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15328869255c3bdd1de2f7f7_90084793', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18723087485c3bdd1de33672_81326258', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11256843335c3bdd1deb8390_74187724', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_4294303685c3bdd1de2b978_11260057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_4294303685c3bdd1de2b978_11260057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
uczestnik/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_15328869255c3bdd1de2f7f7_90084793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15328869255c3bdd1de2f7f7_90084793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy uczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18723087485c3bdd1de33672_81326258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18723087485c3bdd1de33672_81326258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../uczestnik/uczestnikForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_11256843335c3bdd1deb8390_74187724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_11256843335c3bdd1deb8390_74187724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
