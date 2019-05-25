<?php
/* Smarty version 3.1.33, created on 2019-04-10 12:14:59
  from 'C:\xampp\htdocs\safe\templates\ajaxModals\addJezyk.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadc223a4ee60_93385673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea348576b77e45485ea97ddac369dbdc67658c36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\ajaxModals\\addJezyk.html.tpl',
      1 => 1546457999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../jezyk/jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5cadc223a4ee60_93385673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12298733615cadc22395b261_71325775', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19068493045cadc223998166_65625681', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18742862845cadc2239d5065_84189168', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18427440835cadc223a11f64_54964814', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_12298733615cadc22395b261_71325775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_12298733615cadc22395b261_71325775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
jezyk/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_19068493045cadc223998166_65625681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19068493045cadc223998166_65625681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18742862845cadc2239d5065_84189168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18742862845cadc2239d5065_84189168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../jezyk/jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_18427440835cadc223a11f64_54964814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_18427440835cadc223a11f64_54964814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
