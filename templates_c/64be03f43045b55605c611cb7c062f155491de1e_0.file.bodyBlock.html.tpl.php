<?php
/* Smarty version 3.1.33, created on 2019-05-24 21:20:02
  from 'C:\xampp\htdocs\safe\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce843e2b4d596_39325769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64be03f43045b55605c611cb7c062f155491de1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\bodyBlock.html.tpl',
      1 => 1558725597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./flashMessage.html.tpl' => 1,
    'file:./modals/base.html.tpl' => 1,
  ),
),false)) {
function content_5ce843e2b4d596_39325769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="container">
  <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false && 'sprawdzRange' == 5) {?>
  <div class="menu">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13682080795ce843e2b2e187_37758267', 'menu');
?>

  </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value != false && 'sprawdzRange' == 1) {?>
  <div class="menu">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5565712845ce843e2b39d04_59409014', 'menu');
?>

  </div>
  <?php }?>
  <div class="page-header">
    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1943215005ce843e2b3db86_26295088', 'title');
?>
</h1>
  </div>

  <?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8457726425ce843e2b49717_80640446', 'body');
?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:./modals/base.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'menu'} */
class Block_13682080795ce843e2b2e187_37758267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_13682080795ce843e2b2e187_37758267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
opis/"><span class="glyphicon glyphicon-home"></span>Home</a>
          <li><a href=""><span class="glyphicon glyphicon-user"></span>User</a>
            <ul>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/"><span class="glyphicon glyphicon-plus"></span>Add</a></li>
              <li><a href=""><span class="glyphicon glyphicon-edit"></span>Edit</a></li>
              <li><a href=""><span class="glyphicon glyphicon-remove"></span>Delete</a></li>
            </ul>
          </li>
    </ul>
    <?php
}
}
/* {/block 'menu'} */
/* {block 'menu'} */
class Block_5565712845ce843e2b39d04_59409014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_5565712845ce843e2b39d04_59409014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
test3/"><span class="glyphicon glyphicon-home"></span>Home</a>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/"><span class="glyphicon glyphicon-user"></span>User</a>
            <ul>
              <li><a href=""><span class="glyphicon glyphicon-plus"></span>Add</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/"><span class="glyphicon glyphicon-edit"></span>Edit</a></li>
              <li><a href=""><span class="glyphicon glyphicon-remove"></span>Delete</a></li>
            </ul>
          </li>
    </ul>
    <?php
}
}
/* {/block 'menu'} */
/* {block 'title'} */
class Block_1943215005ce843e2b3db86_26295088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1943215005ce843e2b3db86_26295088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Błąd<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8457726425ce843e2b49717_80640446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8457726425ce843e2b49717_80640446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'body'} */
}
