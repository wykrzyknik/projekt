<?php
/* Smarty version 3.1.33, created on 2019-01-21 02:08:08
  from 'C:\xampp\htdocs\lab9\templates\kursoferta\kursofertaForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c451b78a02582_79966703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5e2f91e481d757aaf76ea7d37130de719cf9a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kursoferta\\kursofertaForm.html.tpl',
      1 => 1548028387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c451b78a02582_79966703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lab9\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="form-group">
<label for="Idjezyka">Jezyk</label>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Idjezyka'])) {?>
  <?php echo smarty_function_html_options(array('name'=>'Idjezyka','options'=>$_smarty_tpl->tpl_vars['jezyk']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['Idjezyka']),$_smarty_tpl);?>

<?php } else { ?>
  <?php echo smarty_function_html_options(array('name'=>'Idjezyka','options'=>$_smarty_tpl->tpl_vars['jezyk']->value,'class'=>"form-control"),$_smarty_tpl);?>

<?php }?>
<div class="help-block with-errors"></div>
</div>

<div class="form-group has-feedback">
  <label for="Nazwaoferty">Nazwaoferty</label>
  <input class="form-control" id="Nazwaoferty" name="Nazwaoferty" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwaoferty'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwaoferty'];
}?>"
    type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="PoziomKursu">PoziomKursu</label>
  <input class="form-control" id="PoziomKursu" name="PoziomKursu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['PoziomKursu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['PoziomKursu'];
}?>"
    type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <div class="form-group has-feedback">
    <label for="Cena"">Cena"</label>
    <input class="form-control" id="Cena" name="Cena" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Cena'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Cena'];
}?>"
    type="text"
    data-minlength="1"
    maxlength="10"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
  </div>
<?php }
}
