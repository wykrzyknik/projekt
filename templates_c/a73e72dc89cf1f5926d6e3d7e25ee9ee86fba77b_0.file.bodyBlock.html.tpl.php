<?php
/* Smarty version 3.1.33, created on 2018-12-06 16:03:04
  from 'C:\xampp\htdocs\Lab8-9\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c093a285d35e4_50032995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a73e72dc89cf1f5926d6e3d7e25ee9ee86fba77b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\bodyBlock.html.tpl',
      1 => 1544108580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./flashMessage.html.tpl' => 1,
  ),
),false)) {
function content_5c093a285d35e4_50032995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="page-header">
    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13398644565c093a285cec14_88268589', 'title');
?>
</h1>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18386826745c093a285d2d15_43530159', 'body');
?>

</div>
<?php }
/* {block 'title'} */
class Block_13398644565c093a285cec14_88268589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13398644565c093a285cec14_88268589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowy tytuł strony<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18386826745c093a285d2d15_43530159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18386826745c093a285d2d15_43530159',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'body'} */
}
