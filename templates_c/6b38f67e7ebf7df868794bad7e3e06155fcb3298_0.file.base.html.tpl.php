<?php
/* Smarty version 3.1.33, created on 2018-12-12 22:09:21
  from 'C:\xampp\htdocs\lab9\templates\modals\base.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c117901c5b249_41435373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b38f67e7ebf7df868794bad7e3e06155fcb3298' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\modals\\base.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c117901c5b249_41435373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- BEGIN OF MODAL WINDOW -->
<div class="modal fade" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404071225c117901c4b832_67713487', 'id');
?>
"
     tabindex="-1" role="dialog"
     aria-labelledby="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12837051255c117901c4f6c0_71572403', 'id');
?>
-title" aria-hidden="true">
     <div class="modal-dialog <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8453937565c117901c53546_14805391', 'size');
?>
">
        <div class="modal-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20945009435c117901c573c3_90877669', 'content');
?>

        </div>
     </div>
</div><!-- END OF MODAL WINDOW -->
<?php }
/* {block 'id'} */
class Block_1404071225c117901c4b832_67713487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_1404071225c117901c4b832_67713487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'id'} */
class Block_12837051255c117901c4f6c0_71572403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_12837051255c117901c4f6c0_71572403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'size'} */
class Block_8453937565c117901c53546_14805391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'size' => 
  array (
    0 => 'Block_8453937565c117901c53546_14805391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'size'} */
/* {block 'content'} */
class Block_20945009435c117901c573c3_90877669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20945009435c117901c573c3_90877669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
}
