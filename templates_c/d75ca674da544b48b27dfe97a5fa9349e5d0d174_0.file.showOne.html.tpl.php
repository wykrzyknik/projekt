<?php
/* Smarty version 3.1.33, created on 2018-12-06 17:09:06
  from 'C:\xampp\htdocs\Lab8-9\templates\Klient\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0949a2284c79_75389393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd75ca674da544b48b27dfe97a5fa9349e5d0d174' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab8-9\\templates\\Klient\\showOne.html.tpl',
      1 => 1544112543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c0949a2284c79_75389393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10456744735c0949a2274496_30055177', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8836765685c0949a22751b3_66962670', 'body');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15605968455c0949a2280da0_55890841', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_10456744735c0949a2274496_30055177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10456744735c0949a2274496_30055177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegółowe informacje o kliencie<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8836765685c0949a22751b3_66962670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8836765685c0949a22751b3_66962670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nazwisko'];?>
</h3>
        <p>
          Ulica:<?php echo $_smarty_tpl->tpl_vars['data']->value['ulica'];?>
</br>
           Nr Lokalu: <?php echo $_smarty_tpl->tpl_vars['data']->value['nrLokalu'];?>
</br>
           nr Mieszkania: <?php echo $_smarty_tpl->tpl_vars['data']->value['nrMieszkania'];?>
</br>
           Miejscowosc:<?php echo $_smarty_tpl->tpl_vars['data']->value['miejscowosc'];?>
</br>
           Kod Pocztowy:<?php echo $_smarty_tpl->tpl_vars['data']->value['kodPocztowy'];?>
</br>
           Poczta:<?php echo $_smarty_tpl->tpl_vars['data']->value['Poczta'];?>
</br></p>
        <p class="text-right">
          <button type="button" class="btn btn-danger btn-sm delete-button"
                data-url="klient/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
                data-description="<?php echo $_smarty_tpl->tpl_vars['data']->value['imie'];?>
"
                data-toggle="tooltip" data-placement="top" title="Usuń klient">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń Klienta
          </button>
        </p>
      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_15605968455c0949a2280da0_55890841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15605968455c0949a2280da0_55890841',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:../modals/deleteConfirmBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
