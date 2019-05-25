<?php
/* Smarty version 3.1.33, created on 2019-01-21 01:08:46
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\editKursUczestnik.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c450d8e5ec724_96911752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4461b11abd63141fbcc3f6f20a06cb821ea77c5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\editKursUczestnik.html.tpl',
      1 => 1548029257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kursuczestnik/kursuczestnikForm.html.tpl' => 1,
  ),
),false)) {
function content_5c450d8e5ec724_96911752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9698008435c450d8e5d5022_46679146', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11386383825c450d8e5d8ea5_92100638', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19328193765c450d8e5dcd23_77978071', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11618454315c450d8e5e88a6_72003782', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_9698008435c450d8e5d5022_46679146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_9698008435c450d8e5d5022_46679146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kursuczestnik/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_11386383825c450d8e5d8ea5_92100638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11386383825c450d8e5d8ea5_92100638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja kursuczestnik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19328193765c450d8e5dcd23_77978071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19328193765c450d8e5dcd23_77978071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../kursuczestnik/kursuczestnikForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_11618454315c450d8e5e88a6_72003782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_11618454315c450d8e5e88a6_72003782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
