<?php
/* Smarty version 3.1.33, created on 2018-12-06 16:29:50
  from 'C:\xampp\htdocs\Lab8-9\templates\navbarBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c09406e7e2518_78262497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30851d0621631a839e3977243fca96d4cc0d2753' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\navbarBlock.html.tpl',
      1 => 1544110188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c09406e7e2518_78262497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
localhost">Strona Główna</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17820090865c09406e7d3ba4_07390430', 'leftNavbar');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9891933465c09406e7da5a6_85835357', 'rightNavbar');
?>

    </div><!--/.nav-collapse -->
  </div>
</nav>
<?php }
/* {block 'leftNavbar'} */
class Block_17820090865c09406e7d3ba4_07390430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftNavbar' => 
  array (
    0 => 'Block_17820090865c09406e7d3ba4_07390430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
klient/">Klient</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
pracownik/">Pracownik</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
nieruchomosc/">Nieruchomość</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
dom/">Dom</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
mieszkanie/">Mieszkanie</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
dzialka/">Działka</a></li>
      </ul>
      <?php
}
}
/* {/block 'leftNavbar'} */
/* {block 'rightNavbar'} */
class Block_9891933465c09406e7da5a6_85835357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightNavbar' => 
  array (
    0 => 'Block_9891933465c09406e7da5a6_85835357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="nav navbar-nav navbar-right">
        <?php if (!isset($_smarty_tpl->tpl_vars['isLogin']->value) || !$_smarty_tpl->tpl_vars['isLogin']->value) {?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-logowania/">Zaloguj się</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-rejestracji/">Rejestracja</a></li>
        <?php } else { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Użytkownik zalogowany <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="edit-user" href="">Edytuj profil</a></li>
            <li><a id="edit-password" href="">Zmień hasło</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wyloguj/">Wyloguj się</a></li>
          </ul>
        </li>
        <?php }?>
      </ul>
      <?php
}
}
/* {/block 'rightNavbar'} */
}
