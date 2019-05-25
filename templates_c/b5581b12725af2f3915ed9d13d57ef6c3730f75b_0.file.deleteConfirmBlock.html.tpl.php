<?php
/* Smarty version 3.1.33, created on 2018-12-12 22:09:21
  from 'C:\xampp\htdocs\lab9\templates\modals\deleteConfirmBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c117901c3be31_02845967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5581b12725af2f3915ed9d13d57ef6c3730f75b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\modals\\deleteConfirmBlock.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./formBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c117901c3be31_02845967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6765862895c117901c2c438_08082391', 'id');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7368618645c117901c302b3_33361144', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_316170515c117901c34131_09969685', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3610335625c117901c37fb3_38370278', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./base.html.tpl");
}
/* {block 'id'} */
class Block_6765862895c117901c2c438_08082391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_6765862895c117901c2c438_08082391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
delete-confirm-modal<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_7368618645c117901c302b3_33361144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7368618645c117901c302b3_33361144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Usuwanie danych<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_316170515c117901c34131_09969685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_316170515c117901c34131_09969685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:./formBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
/* {block 'acceptButton'} */
class Block_3610335625c117901c37fb3_38370278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_3610335625c117901c37fb3_38370278',
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
