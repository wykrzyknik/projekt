<?php
/* Smarty version 3.1.33, created on 2018-12-12 22:09:21
  from 'C:\xampp\htdocs\lab9\templates\modals\formBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c117901cc0b53_79161924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d9301fdf1cb15a1cd8b2ec04c880f4efcf70a68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\modals\\formBlock.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c117901cc0b53_79161924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <form id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2489193825c117901ca9457_84562170', 'id');
?>
-form"
        action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20345397515c117901cad2d9_08629350', 'action');
?>
" method="POST">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20348401715c117901cb1154_17502603', 'id');
?>
-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8192318565c117901cb4fd6_00814574', 'title');
?>
</h4>
    </div>
    <div class="modal-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7216808615c117901cb8e52_02984224', 'body');
?>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18409960135c117901cbccd5_75384103', 'acceptButton');
?>

    </div>
  </form>
<?php }
/* {block 'id'} */
class Block_2489193825c117901ca9457_84562170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_2489193825c117901ca9457_84562170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'action'} */
class Block_20345397515c117901cad2d9_08629350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_20345397515c117901cad2d9_08629350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'id'} */
class Block_20348401715c117901cb1154_17502603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_20348401715c117901cb1154_17502603',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal-id<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_8192318565c117901cb4fd6_00814574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8192318565c117901cb4fd6_00814574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7216808615c117901cb8e52_02984224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7216808615c117901cb8e52_02984224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_18409960135c117901cbccd5_75384103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_18409960135c117901cbccd5_75384103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'acceptButton'} */
}
