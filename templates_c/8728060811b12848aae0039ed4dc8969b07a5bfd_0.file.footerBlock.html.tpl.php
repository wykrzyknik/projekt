<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:02:25
  from 'C:\xampp\htdocs\Lab8-9\templates\footerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c094811f12e47_94465302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8728060811b12848aae0039ed4dc8969b07a5bfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\footerBlock.html.tpl',
      1 => 1544112144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c094811f12e47_94465302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <!-- FOOTER -->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4036973495c094811f01529_59024844', 'footer');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8756627545c094811f03a80_08035171', 'javascript');
?>

</body>
</html>
<?php }
/* {block 'footer'} */
class Block_4036973495c094811f01529_59024844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4036973495c094811f01529_59024844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
      <footer class="footer">
        <p>Zaawansowane programowanie aplikacji internetowych</p>
      </footer>
  </div>
  <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript'} */
class Block_8756627545c094811f03a80_08035171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_8756627545c094811f03a80_08035171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_smarty_tpl->tpl_vars['jsFile']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jsFile']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
  <?php
}
}
/* {/block 'javascript'} */
}
