<?php
/* Smarty version 3.1.33, created on 2018-12-11 20:31:59
  from 'C:\xampp\htdocs\lab9\templates\headerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1010afecd5d0_10919974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '142dddb4f501325f0396efd524572ec1372c05d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\headerBlock.html.tpl',
      1 => 1544108154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1010afecd5d0_10919974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8494064865c1010afec1a58_06372810', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7521232115c1010afec9756_66556106', 'css');
?>

  </head>
  <body>
<?php }
/* {block 'title'} */
class Block_879379795c1010afec58d9_10974752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ZPAI<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_8494064865c1010afec1a58_06372810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_8494064865c1010afec1a58_06372810',
  ),
  'title' => 
  array (
    0 => 'Block_879379795c1010afec58d9_10974752',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_879379795c1010afec58d9_10974752', 'title', $this->tplIndex);
?>
</title>
    <?php
}
}
/* {/block 'header'} */
/* {block 'css'} */
class Block_7521232115c1010afec9756_66556106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_7521232115c1010afec9756_66556106',
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
