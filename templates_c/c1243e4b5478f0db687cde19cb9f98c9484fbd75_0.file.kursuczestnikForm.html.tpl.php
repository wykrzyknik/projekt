<?php
/* Smarty version 3.1.33, created on 2019-01-21 01:13:48
  from 'C:\xampp\htdocs\lab9\templates\kursuczestnik\kursuczestnikForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c450ebc560e18_55113609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1243e4b5478f0db687cde19cb9f98c9484fbd75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kursuczestnik\\kursuczestnikForm.html.tpl',
      1 => 1548029617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c450ebc560e18_55113609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lab9\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="form-group">
<label for="Idkursu">Kurs</label>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Idkursu'])) {?>
  <?php echo smarty_function_html_options(array('name'=>'Idkursu','options'=>$_smarty_tpl->tpl_vars['kurs']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['Idkursu']),$_smarty_tpl);?>

<?php } else { ?>
  <?php echo smarty_function_html_options(array('name'=>'Idkursu','options'=>$_smarty_tpl->tpl_vars['kurs']->value,'class'=>"form-control"),$_smarty_tpl);?>

<?php }?>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label for="Iduczestnika">Uczestnik</label>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Iduczestnika'])) {?>
  <?php echo smarty_function_html_options(array('name'=>'Iduczestnika','options'=>$_smarty_tpl->tpl_vars['uczestnik']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['Iduczestnika']),$_smarty_tpl);?>

<?php } else { ?>
  <?php echo smarty_function_html_options(array('name'=>'Iduczestnika','options'=>$_smarty_tpl->tpl_vars['uczestnik']->value,'class'=>"form-control"),$_smarty_tpl);?>

<?php }?>
<div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Oplacano">Oplacano</label>
  <input class="form-control" id="Oplacano" name="Oplacano" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Oplacano'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Oplacano'];
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
  <label for="Opis">Opis</label>
  <input class="form-control" id="Opis" name="Opis" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Opis'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Opis'];
}?>"
    type="text"
    maxlength="50">
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<?php }
}
