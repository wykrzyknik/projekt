<?php
/* Smarty version 3.1.33, created on 2019-01-03 19:36:28
  from 'C:\xampp\htdocs\lab9\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e562c9e6263_83257189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0971d02de3cfb306966b77baf5d9463745a65890' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\tableTemplate.html.tpl',
      1 => 1546540586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c2e562c9e6263_83257189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2506046655c2e562c90b621_24184647', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9835421695c2e562c9da6e6_35676548', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'checkableFormHeader'} */
class Block_1379305875c2e562c95d6c7_49405573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_19408932685c2e562c961548_06939144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_7456053315c2e562c9653c9_84527255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				  <th></th>
    					<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_17227249655c2e562c9d29d4_86366952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'tbody'} */
/* {block 'checkableFormFooter'} */
class Block_4601310275c2e562c9d6858_99168661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormFooter'} */
/* {block 'body'} */
class Block_2506046655c2e562c90b621_24184647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2506046655c2e562c90b621_24184647',
  ),
  'checkableFormHeader' => 
  array (
    0 => 'Block_1379305875c2e562c95d6c7_49405573',
  ),
  'thead' => 
  array (
    0 => 'Block_19408932685c2e562c961548_06939144',
  ),
  'tfoot' => 
  array (
    0 => 'Block_7456053315c2e562c9653c9_84527255',
  ),
  'tbody' => 
  array (
    0 => 'Block_17227249655c2e562c9d29d4_86366952',
  ),
  'checkableFormFooter' => 
  array (
    0 => 'Block_4601310275c2e562c9d6858_99168661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1379305875c2e562c95d6c7_49405573', 'checkableFormHeader', $this->tplIndex);
?>

    <!-- BEGIN TABLE WITH DATA -->
    <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
        <thead><tr>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19408932685c2e562c961548_06939144', 'thead', $this->tplIndex);
?>

        </tr></thead>
    		<tfoot><tr>
    					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7456053315c2e562c9653c9_84527255', 'tfoot', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17227249655c2e562c9d29d4_86366952', 'tbody', $this->tplIndex);
?>

    			</tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table><!-- END TABLE WITH DATA -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4601310275c2e562c9d6858_99168661', 'checkableFormFooter', $this->tplIndex);
?>

  <?php }
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_9835421695c2e562c9da6e6_35676548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9835421695c2e562c9da6e6_35676548',
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
