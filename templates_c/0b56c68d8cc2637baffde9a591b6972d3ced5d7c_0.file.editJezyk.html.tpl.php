<?php
/* Smarty version 3.1.33, created on 2019-01-12 20:20:52
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\editJezyk.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a3e14cc24f2_04848105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b56c68d8cc2637baffde9a591b6972d3ced5d7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\editJezyk.html.tpl',
      1 => 1546458094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../jezyk/jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5c3a3e14cc24f2_04848105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6076937495c3a3e14bf72c3_52100504', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3606151545c3a3e14c0ab44_09038614', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_813130475c3a3e14c0e9c6_22933709', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13873858845c3a3e14cbe671_41761469', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_6076937495c3a3e14bf72c3_52100504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_6076937495c3a3e14bf72c3_52100504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
jezyk/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_3606151545c3a3e14c0ab44_09038614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3606151545c3a3e14c0ab44_09038614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja jezyka<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_813130475c3a3e14c0e9c6_22933709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_813130475c3a3e14c0e9c6_22933709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../jezyk/jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_13873858845c3a3e14cbe671_41761469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_13873858845c3a3e14cbe671_41761469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
