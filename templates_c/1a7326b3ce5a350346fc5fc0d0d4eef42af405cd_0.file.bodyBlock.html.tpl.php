<?php
/* Smarty version 3.1.33, created on 2019-01-03 19:36:28
  from 'C:\xampp\htdocs\lab9\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e562ca24a76_49231574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7326b3ce5a350346fc5fc0d0d4eef42af405cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\bodyBlock.html.tpl',
      1 => 1546540565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./flashMessage.html.tpl' => 1,
    'file:./modals/base.html.tpl' => 1,
  ),
),false)) {
function content_5c2e562ca24a76_49231574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="page-header">
    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11000980125c2e562ca1cd62_96298620', 'title');
?>
</h1>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19758205455c2e562ca20bf9_37537230', 'body');
?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:./modals/base.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'title'} */
class Block_11000980125c2e562ca1cd62_96298620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11000980125c2e562ca1cd62_96298620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowy tytuł strony<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19758205455c2e562ca20bf9_37537230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19758205455c2e562ca20bf9_37537230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'body'} */
}
