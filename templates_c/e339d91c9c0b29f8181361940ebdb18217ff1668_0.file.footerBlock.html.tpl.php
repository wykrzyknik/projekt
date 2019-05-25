<?php
/* Smarty version 3.1.33, created on 2019-01-23 21:48:00
  from 'C:\xampp\htdocs\lab9\templates\footerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c48d3008d7e10_82622153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e339d91c9c0b29f8181361940ebdb18217ff1668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\footerBlock.html.tpl',
      1 => 1548276476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c48d3008d7e10_82622153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <!-- FOOTER -->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17583611945c48d3007f9351_25898984', 'footer');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13061321365c48d3008b8a06_70001552', 'javascript');
?>

</body>
</html>
<?php }
/* {block 'footer'} */
class Block_17583611945c48d3007f9351_25898984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17583611945c48d3007f9351_25898984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
      <footer class="footer">
        <p>Zaawansowane programowanie aplikacji internetowych</p>

      <?php echo '<?php
        ';?>\Tools\FlashMessage::printDate();
        Dzisiaj jest  printDate();
         <?php echo '?>';?>
      </footer>
  </div>
  <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript'} */
class Block_13061321365c48d3008b8a06_70001552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_13061321365c48d3008b8a06_70001552',
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
