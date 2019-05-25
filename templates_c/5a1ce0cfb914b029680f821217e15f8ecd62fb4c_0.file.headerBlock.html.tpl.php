<?php
/* Smarty version 3.1.33, created on 2019-05-19 22:51:49
  from 'C:\xampp\htdocs\safe\templates\headerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce1c1e5aecc64_98493417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1ce0cfb914b029680f821217e15f8ecd62fb4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\headerBlock.html.tpl',
      1 => 1558299090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce1c1e5aecc64_98493417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11147132555ce1c1e5ac99d8_97479489', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6417440035ce1c1e5ad16d5_64689106', 'css');
?>

  </head>
  <body>
<?php }
/* {block 'title'} */
class Block_14503285605ce1c1e5acd855_34538116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_11147132555ce1c1e5ac99d8_97479489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11147132555ce1c1e5ac99d8_97479489',
  ),
  'title' => 
  array (
    0 => 'Block_14503285605ce1c1e5acd855_34538116',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14503285605ce1c1e5acd855_34538116', 'title', $this->tplIndex);
?>
</title>
    <?php
}
}
/* {/block 'header'} */
/* {block 'css'} */
class Block_6417440035ce1c1e5ad16d5_64689106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_6417440035ce1c1e5ad16d5_64689106',
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
