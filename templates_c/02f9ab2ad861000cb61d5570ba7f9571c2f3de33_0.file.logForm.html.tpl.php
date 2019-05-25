<?php
/* Smarty version 3.1.33, created on 2019-05-20 00:10:12
  from 'C:\xampp\htdocs\safe\templates\Access\logForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce1d44458dfc8_24658733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f9ab2ad861000cb61d5570ba7f9571c2f3de33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\Access\\logForm.html.tpl',
      1 => 1558303810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce1d44458dfc8_24658733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14645620565ce1d44457a731_00101213', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1766277925ce1d44457e5b4_68639712', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_14645620565ce1d44457a731_00101213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14645620565ce1d44457a731_00101213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz logowania<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1766277925ce1d44457e5b4_68639712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1766277925ce1d44457e5b4_68639712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form id="logform" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
zaloguj/" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="password">Hasło</label>
    <input type="password" class="form-control" id="haslo" name="haslo" placeholder="Wprowadź hasło">
  </div>
  <div class="alert alert-danger collapse" role="alert"></div>
  <button type="submit" class="btn btn-default">Zaloguj</button>
</form>

<?php
}
}
/* {/block 'body'} */
}
