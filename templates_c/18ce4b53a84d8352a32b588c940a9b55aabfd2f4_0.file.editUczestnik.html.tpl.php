<?php
/* Smarty version 3.1.33, created on 2019-01-21 02:01:42
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\editUczestnik.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4519f61bcbb1_48861908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ce4b53a84d8352a32b588c940a9b55aabfd2f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\editUczestnik.html.tpl',
      1 => 1548031881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../uczestnik/uczestnikForm.html.tpl' => 1,
  ),
),false)) {
function content_5c4519f61bcbb1_48861908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19169104045c4519f61a1635_73189499', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17555949295c4519f61a54b4_15554814', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8196571035c4519f61a9334_26078021', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8990604905c4519f61b8d33_81978492', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_19169104045c4519f61a1635_73189499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_19169104045c4519f61a1635_73189499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
uczestnik/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_17555949295c4519f61a54b4_15554814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17555949295c4519f61a54b4_15554814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja uczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8196571035c4519f61a9334_26078021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8196571035c4519f61a9334_26078021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../uczestnik/uczestnikForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_8990604905c4519f61b8d33_81978492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_8990604905c4519f61b8d33_81978492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
