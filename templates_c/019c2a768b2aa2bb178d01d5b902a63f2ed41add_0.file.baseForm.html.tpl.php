<?php
/* Smarty version 3.1.33, created on 2018-12-30 00:39:01
  from 'C:\xampp\htdocs\lab9\templates\baseForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c280595884804_65093174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '019c2a768b2aa2bb178d01d5b902a63f2ed41add' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\baseForm.html.tpl',
      1 => 1544108154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c280595884804_65093174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12544079005c280595870f73_67914209', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10659834535c280595874df9_69356791', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_12544079005c280595870f73_67914209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12544079005c280595870f73_67914209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz dodawania<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_16710969775c280595878c83_42763098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_15831029795c28059587cb02_93742107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formBody'} */
/* {block 'button'} */
class Block_14043723025c280595880988_52468673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'button'} */
/* {block 'body'} */
class Block_10659834535c280595874df9_69356791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10659834535c280595874df9_69356791',
  ),
  'action' => 
  array (
    0 => 'Block_16710969775c280595878c83_42763098',
  ),
  'formBody' => 
  array (
    0 => 'Block_15831029795c28059587cb02_93742107',
  ),
  'button' => 
  array (
    0 => 'Block_14043723025c280595880988_52468673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="validate-form" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16710969775c280595878c83_42763098', 'action', $this->tplIndex);
?>
" method="post">
  <div class="panel panel-default">
    <div class="panel-body">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15831029795c28059587cb02_93742107', 'formBody', $this->tplIndex);
?>

    </div>
    <div class="panel-footer text-right">
        <button type="submit" class="btn btn-success"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14043723025c280595880988_52468673', 'button', $this->tplIndex);
?>
</button>
    </div>
  </div>
</form>
<?php
}
}
/* {/block 'body'} */
}
