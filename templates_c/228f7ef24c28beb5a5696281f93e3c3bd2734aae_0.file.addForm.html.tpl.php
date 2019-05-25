<?php
/* Smarty version 3.1.33, created on 2018-12-29 23:08:02
  from 'C:\xampp\htdocs\lab9\templates\jezyk\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c27f042366e85_85765769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '228f7ef24c28beb5a5696281f93e3c3bd2734aae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\jezyk\\addForm.html.tpl',
      1 => 1544555620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5c27f042366e85_85765769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
extends file="../baseForm.html.tpl"}

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270468335c27f04112c567_39133235', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15339021505c27f0411303e2_46228808', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2872890045c27f041134264_92674512', 'formBody');
?>

<?php }
/* {block 'title'} */
class Block_1270468335c27f04112c567_39133235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1270468335c27f04112c567_39133235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_15339021505c27f0411303e2_46228808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_15339021505c27f0411303e2_46228808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

jezyk/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_2872890045c27f041134264_92674512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_2872890045c27f041134264_92674512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
}
