<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:25:11
  from 'C:\xampp\htdocs\safe\templates\modals\formBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab92074a3453_01635363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e75b398afa49fdd953f600dce139b5a74bfd23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\modals\\formBlock.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab92074a3453_01635363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <form id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2231327355cab920748bd56_69787428', 'id');
?>
-form"
        action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6396123725cab920748fbd2_80719531', 'action');
?>
" method="POST">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2928766545cab9207493a55_43504652', 'id');
?>
-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17678049225cab92074978d3_98564198', 'title');
?>
</h4>
    </div>
    <div class="modal-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14933255295cab920749b752_76690256', 'body');
?>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7012610015cab920749f5d4_30675137', 'acceptButton');
?>

    </div>
  </form>
<?php }
/* {block 'id'} */
class Block_2231327355cab920748bd56_69787428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_2231327355cab920748bd56_69787428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'action'} */
class Block_6396123725cab920748fbd2_80719531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_6396123725cab920748fbd2_80719531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'id'} */
class Block_2928766545cab9207493a55_43504652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_2928766545cab9207493a55_43504652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal-id<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_17678049225cab92074978d3_98564198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17678049225cab92074978d3_98564198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14933255295cab920749b752_76690256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14933255295cab920749b752_76690256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_7012610015cab920749f5d4_30675137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_7012610015cab920749f5d4_30675137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'acceptButton'} */
}
