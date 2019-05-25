<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:25:11
  from 'C:\xampp\htdocs\safe\templates\modals\base.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab920741e738_71478072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c882cfe5fb0713b8e9c8dd255993468a7bd17de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\modals\\base.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab920741e738_71478072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- BEGIN OF MODAL WINDOW -->
<div class="modal fade" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7378983915cab920740ed37_76273709', 'id');
?>
"
     tabindex="-1" role="dialog"
     aria-labelledby="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9685843515cab9207412bb2_33301071', 'id');
?>
-title" aria-hidden="true">
     <div class="modal-dialog <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5349547505cab9207416a34_77451088', 'size');
?>
">
        <div class="modal-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9524663735cab920741a8b0_74372188', 'content');
?>

        </div>
     </div>
</div><!-- END OF MODAL WINDOW -->
<?php }
/* {block 'id'} */
class Block_7378983915cab920740ed37_76273709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_7378983915cab920740ed37_76273709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'id'} */
class Block_9685843515cab9207412bb2_33301071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_9685843515cab9207412bb2_33301071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'size'} */
class Block_5349547505cab9207416a34_77451088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'size' => 
  array (
    0 => 'Block_5349547505cab9207416a34_77451088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'size'} */
/* {block 'content'} */
class Block_9524663735cab920741a8b0_74372188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9524663735cab920741a8b0_74372188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
}
