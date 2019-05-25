<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:25:11
  from 'C:\xampp\htdocs\safe\templates\modals\deleteConfirmBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab920746c941_18427026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f024df21ce13f24280a830c0c4154093e127c752' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\modals\\deleteConfirmBlock.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./formBlock.html.tpl' => 1,
  ),
),false)) {
function content_5cab920746c941_18427026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9635821875cab920745cf45_36241188', 'id');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10062164735cab9207460dc9_33776301', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3765483975cab9207464c48_61750387', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14993430475cab9207468ac2_73616521', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./base.html.tpl");
}
/* {block 'id'} */
class Block_9635821875cab920745cf45_36241188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_9635821875cab920745cf45_36241188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
delete-confirm-modal<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_10062164735cab9207460dc9_33776301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10062164735cab9207460dc9_33776301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Usuwanie danych<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_3765483975cab9207464c48_61750387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3765483975cab9207464c48_61750387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:./formBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
/* {block 'acceptButton'} */
class Block_14993430475cab9207468ac2_73616521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_14993430475cab9207468ac2_73616521',
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
