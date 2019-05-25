<?php
/* Smarty version 3.1.33, created on 2018-12-06 16:03:04
  from 'C:\xampp\htdocs\Lab8-9\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c093a285b3ba7_65174601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df7eda5362bfb633ea5cbd4bbd6e69963fd34c89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\tableTemplate.html.tpl',
      1 => 1544108576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c093a285b3ba7_65174601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18708044485c093a285a18d4_33252351', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'checkableFormHeader'} */
class Block_452934665c093a285a55c1_22291469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_6565385995c093a285a6076_63230162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_10843298895c093a285a6aa0_81022918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				  <th></th>
    					<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_11486506195c093a285b1b51_18986033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'tbody'} */
/* {block 'checkableFormFooter'} */
class Block_20933331295c093a285b2bb3_21999288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormFooter'} */
/* {block 'body'} */
class Block_18708044485c093a285a18d4_33252351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18708044485c093a285a18d4_33252351',
  ),
  'checkableFormHeader' => 
  array (
    0 => 'Block_452934665c093a285a55c1_22291469',
  ),
  'thead' => 
  array (
    0 => 'Block_6565385995c093a285a6076_63230162',
  ),
  'tfoot' => 
  array (
    0 => 'Block_10843298895c093a285a6aa0_81022918',
  ),
  'tbody' => 
  array (
    0 => 'Block_11486506195c093a285b1b51_18986033',
  ),
  'checkableFormFooter' => 
  array (
    0 => 'Block_20933331295c093a285b2bb3_21999288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452934665c093a285a55c1_22291469', 'checkableFormHeader', $this->tplIndex);
?>

    <!-- BEGIN TABLE WITH DATA -->
    <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
        <thead><tr>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6565385995c093a285a6076_63230162', 'thead', $this->tplIndex);
?>

        </tr></thead>
    		<tfoot><tr>
    					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10843298895c093a285a6aa0_81022918', 'tfoot', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11486506195c093a285b1b51_18986033', 'tbody', $this->tplIndex);
?>

    			</tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table><!-- END TABLE WITH DATA -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20933331295c093a285b2bb3_21999288', 'checkableFormFooter', $this->tplIndex);
?>

  <?php }
}
}
/* {/block 'body'} */
}
