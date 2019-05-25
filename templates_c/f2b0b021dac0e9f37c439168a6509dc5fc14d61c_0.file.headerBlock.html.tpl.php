<?php
/* Smarty version 3.1.33, created on 2018-12-06 15:56:01
  from 'C:\xampp\htdocs\Lab8-9\templates\headerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c093881a1c267_51929518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b0b021dac0e9f37c439168a6509dc5fc14d61c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\headerBlock.html.tpl',
      1 => 1544108152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c093881a1c267_51929518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4445044145c093881a128e3_52459201', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5666834855c093881a14075_56390411', 'css');
?>

  </head>
  <body>
<?php }
/* {block 'title'} */
class Block_20253241025c093881a130d2_01411854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ZPAI<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_4445044145c093881a128e3_52459201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_4445044145c093881a128e3_52459201',
  ),
  'title' => 
  array (
    0 => 'Block_20253241025c093881a130d2_01411854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20253241025c093881a130d2_01411854', 'title', $this->tplIndex);
?>
</title>
    <?php
}
}
/* {/block 'header'} */
/* {block 'css'} */
class Block_5666834855c093881a14075_56390411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_5666834855c093881a14075_56390411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['cssFile']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cssFile']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
" rel="stylesheet">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php
}
}
/* {/block 'css'} */
}
