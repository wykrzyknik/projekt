<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:06:31
  from 'C:\xampp\htdocs\Lab8-9\templates\modals\formBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c09490790dcb8_19926885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b72c1dd989673090f065b7f8dff1e80bd7ce00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\modals\\formBlock.html.tpl',
      1 => 1544112387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c09490790dcb8_19926885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <form id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16299025375c094907903776_72035631', 'id');
?>
-form"
        action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_603128625c09490790a919_98661359', 'action');
?>
" method="POST">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8978673755c09490790b420_21955436', 'id');
?>
-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12979579435c09490790bec8_55732202', 'title');
?>
</h4>
    </div>
    <div class="modal-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9015966705c09490790c942_70841417', 'body');
?>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19966353285c09490790d308_24942351', 'acceptButton');
?>

    </div>
  </form>
<?php }
/* {block 'id'} */
class Block_16299025375c094907903776_72035631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_16299025375c094907903776_72035631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'action'} */
class Block_603128625c09490790a919_98661359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_603128625c09490790a919_98661359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'id'} */
class Block_8978673755c09490790b420_21955436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_8978673755c09490790b420_21955436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal-id<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_12979579435c09490790bec8_55732202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12979579435c09490790bec8_55732202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9015966705c09490790c942_70841417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9015966705c09490790c942_70841417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_19966353285c09490790d308_24942351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_19966353285c09490790d308_24942351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'acceptButton'} */
}
