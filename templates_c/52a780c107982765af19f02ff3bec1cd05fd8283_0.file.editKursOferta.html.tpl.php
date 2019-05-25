<?php
/* Smarty version 3.1.33, created on 2019-01-20 23:13:06
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\editKursOferta.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c44f2721a6d90_61597306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a780c107982765af19f02ff3bec1cd05fd8283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\editKursOferta.html.tpl',
      1 => 1548020724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kursoferta/kursofertaForm.html.tpl' => 1,
  ),
),false)) {
function content_5c44f2721a6d90_61597306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6680461495c44f27213d5f3_75309424', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1637814085c44f272141476_11462906', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1151777875c44f2721452f8_80716251', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6745104225c44f2721a2f19_38786173', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_6680461495c44f27213d5f3_75309424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_6680461495c44f27213d5f3_75309424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kursoferta/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_1637814085c44f272141476_11462906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1637814085c44f272141476_11462906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja kursoferta<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1151777875c44f2721452f8_80716251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1151777875c44f2721452f8_80716251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../kursoferta/kursofertaForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_6745104225c44f2721a2f19_38786173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_6745104225c44f2721a2f19_38786173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
