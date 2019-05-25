<?php
/* Smarty version 3.1.33, created on 2019-01-21 00:50:36
  from 'C:\xampp\htdocs\lab9\templates\ajaxModals\editKurs.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c45094c81da23_64013624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1aed9add6d5c1a5da508dddf0b51414ce1d42e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\ajaxModals\\editKurs.html.tpl',
      1 => 1546466819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../kurs/kursForm.html.tpl' => 1,
  ),
),false)) {
function content_5c45094c81da23_64013624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7674949015c45094c7a0a06_66301876', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20562533915c45094c7a4889_29190108', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17677626415c45094c7a8702_89589590', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5152484315c45094c819ba7_52949485', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_7674949015c45094c7a0a06_66301876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_7674949015c45094c7a0a06_66301876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kurs/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_20562533915c45094c7a4889_29190108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20562533915c45094c7a4889_29190108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja kurs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17677626415c45094c7a8702_89589590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17677626415c45094c7a8702_89589590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../kurs/kursForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_5152484315c45094c819ba7_52949485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_5152484315c45094c819ba7_52949485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
