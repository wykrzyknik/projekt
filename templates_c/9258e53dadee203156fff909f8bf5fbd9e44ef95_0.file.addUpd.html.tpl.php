<?php
/* Smarty version 3.1.33, created on 2019-01-12 23:15:52
  from 'C:\xampp\htdocs\lab9\templates\jezyk\addUpd.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a67180f8d03_17227482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9258e53dadee203156fff909f8bf5fbd9e44ef95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\jezyk\\addUpd.html.tpl',
      1 => 1547331246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5c3a67180f8d03_17227482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6102510185c3a6717daeaf1_60825287', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9583128215c3a6717db2979_47049499', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6293738695c3a6717db67f1_41375166', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_6102510185c3a6717daeaf1_60825287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6102510185c3a6717daeaf1_60825287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Modyfikuj jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_9583128215c3a6717db2979_47049499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_9583128215c3a6717db2979_47049499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

jezyk/aktualizuj/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>

<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_6293738695c3a6717db67f1_41375166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_6293738695c3a6717db67f1_41375166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
}
