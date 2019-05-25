<?php
/* Smarty version 3.1.33, created on 2019-05-20 15:39:49
  from 'C:\xampp\htdocs\safe\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce2ae25e47373_29722603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b6cc4c5536c39edefd77384898cc8b0951ad8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\tableTemplate.html.tpl',
      1 => 1558359561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5ce2ae25e47373_29722603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4663309555ce2ae25e18569_84853906', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7478380865ce2ae25e434f7_71013831', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'checkableFormHeader'} */
class Block_16745616755ce2ae25e1c3e2_75246042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_18132416205ce2ae25e20262_92478863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_18751636565ce2ae25e240e9_30905032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				  <th></th>
    					<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_21250738095ce2ae25e3b7f5_63999782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'tbody'} */
/* {block 'checkableFormFooter'} */
class Block_9519772335ce2ae25e3f670_40236427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormFooter'} */
/* {block 'body'} */
class Block_4663309555ce2ae25e18569_84853906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4663309555ce2ae25e18569_84853906',
  ),
  'checkableFormHeader' => 
  array (
    0 => 'Block_16745616755ce2ae25e1c3e2_75246042',
  ),
  'thead' => 
  array (
    0 => 'Block_18132416205ce2ae25e20262_92478863',
  ),
  'tfoot' => 
  array (
    0 => 'Block_18751636565ce2ae25e240e9_30905032',
  ),
  'tbody' => 
  array (
    0 => 'Block_21250738095ce2ae25e3b7f5_63999782',
  ),
  'checkableFormFooter' => 
  array (
    0 => 'Block_9519772335ce2ae25e3f670_40236427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16745616755ce2ae25e1c3e2_75246042', 'checkableFormHeader', $this->tplIndex);
?>

    <!-- BEGIN TABLE WITH DATA -->
    <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
        <thead><tr>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18132416205ce2ae25e20262_92478863', 'thead', $this->tplIndex);
?>

        </tr></thead>
    		<tfoot><tr>
    					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18751636565ce2ae25e240e9_30905032', 'tfoot', $this->tplIndex);
?>

    	  </tr></tfoot>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
    			<tr <?php if (isset($_smarty_tpl->tpl_vars['row']->value['noSelectable']) && $_smarty_tpl->tpl_vars['row']->value['noSelectable'] === true) {?>class="noSelectable"<?php }?>>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21250738095ce2ae25e3b7f5_63999782', 'tbody', $this->tplIndex);
?>

    			</tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table><!-- END TABLE WITH DATA -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9519772335ce2ae25e3f670_40236427', 'checkableFormFooter', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_7478380865ce2ae25e434f7_71013831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7478380865ce2ae25e434f7_71013831',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:./modals/deleteConfirmBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
