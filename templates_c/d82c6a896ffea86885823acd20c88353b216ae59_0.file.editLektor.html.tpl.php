<?php
/* Smarty version 3.1.33, created on 2019-01-21 01:33:45
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\editLektor.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c451369b89011_65332548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd82c6a896ffea86885823acd20c88353b216ae59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\editLektor.html.tpl',
      1 => 1548030818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../lektor/lektorForm.html.tpl' => 1,
  ),
),false)) {
function content_5c451369b89011_65332548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2669261165c451369b71916_46486773', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12167232995c451369b75791_01981224', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2277937145c451369b79619_59983945', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4295550995c451369b85196_15008157', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_2669261165c451369b71916_46486773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_2669261165c451369b71916_46486773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
lektor/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_12167232995c451369b75791_01981224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12167232995c451369b75791_01981224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja lektor/<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2277937145c451369b79619_59983945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2277937145c451369b79619_59983945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../lektor/lektorForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_4295550995c451369b85196_15008157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_4295550995c451369b85196_15008157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
