<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:06:31
  from 'C:\xampp\htdocs\Lab8-9\templates\modals\base.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0949078f3049_41634790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51622e58b60594bfe08258b61384429626f58cfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\modals\\base.html.tpl',
      1 => 1544112387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0949078f3049_41634790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- BEGIN OF MODAL WINDOW -->
<div class="modal fade" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20977776865c0949078f0669_54812732', 'id');
?>
"
     tabindex="-1" role="dialog"
     aria-labelledby="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20770021715c0949078f1300_94943111', 'id');
?>
-title" aria-hidden="true">
     <div class="modal-dialog <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11038585595c0949078f1e32_26123903', 'size');
?>
">
        <div class="modal-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4347861815c0949078f2825_84903808', 'content');
?>

        </div>
     </div>
</div><!-- END OF MODAL WINDOW -->
<?php }
/* {block 'id'} */
class Block_20977776865c0949078f0669_54812732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_20977776865c0949078f0669_54812732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'id'} */
class Block_20770021715c0949078f1300_94943111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_20770021715c0949078f1300_94943111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'size'} */
class Block_11038585595c0949078f1e32_26123903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'size' => 
  array (
    0 => 'Block_11038585595c0949078f1e32_26123903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'size'} */
/* {block 'content'} */
class Block_4347861815c0949078f2825_84903808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4347861815c0949078f2825_84903808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
}
