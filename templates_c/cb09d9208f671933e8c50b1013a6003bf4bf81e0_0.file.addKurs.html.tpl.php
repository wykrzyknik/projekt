<?php
/* Smarty version 3.1.33, created on 2019-01-03 20:56:23
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\addKurs.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e68e7beeb86_77685173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb09d9208f671933e8c50b1013a6003bf4bf81e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\addKurs.html.tpl',
      1 => 1546466775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kurs/kursForm.html.tpl' => 1,
  ),
),false)) {
function content_5c2e68e7beeb86_77685173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2873335105c2e68e7bdf179_58083555', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12183991305c2e68e7be2ff3_29055966', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8597610495c2e68e7be6e88_54705743', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14680626685c2e68e7bead01_72218669', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_2873335105c2e68e7bdf179_58083555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_2873335105c2e68e7bdf179_58083555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kurs/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_12183991305c2e68e7be2ff3_29055966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12183991305c2e68e7be2ff3_29055966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy kurs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8597610495c2e68e7be6e88_54705743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8597610495c2e68e7be6e88_54705743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../kurs/kursForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_14680626685c2e68e7bead01_72218669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_14680626685c2e68e7bead01_72218669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
