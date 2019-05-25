<?php
/* Smarty version 3.1.33, created on 2019-05-14 23:32:20
  from 'C:\xampp\htdocs\safe\templates\Access\regForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdb33e4787b63_85132008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb4fd4ab74552fb8ca3c47daba2966d8e797296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\Access\\regForm.html.tpl',
      1 => 1547665062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdb33e4787b63_85132008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10752852835cdb33e475cbe3_55154664', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485480455cdb33e4760a61_11890017', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_10752852835cdb33e475cbe3_55154664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10752852835cdb33e475cbe3_55154664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz Rejestracji<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_485480455cdb33e4760a61_11890017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_485480455cdb33e4760a61_11890017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<form id="regform" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
zarejestruj/" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło">
  </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Wprowadź imię">
  </div>
    <div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname" placeholder="Wprowadź nazwisko">
  </div>
  <div class="alert alert-danger collapse" role="alert"></div>
  <button type="submit" class="btn btn-default">Zarejestruj się</button>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
