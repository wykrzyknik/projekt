<?php
/* Smarty version 3.1.33, created on 2019-01-21 00:53:46
  from 'C:\xampp\htdocs\lab9\templates\kurs\kursForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c450a0ab70ba9_36578557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74e88ae48e8b0c861cdc3691f75f65d5dc1fcb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\kurs\\kursForm.html.tpl',
      1 => 1548028414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c450a0ab70ba9_36578557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lab9\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="form-group">
<label for="Idkursuoferta">KursOferta</label>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Idkursoferta'])) {?>
  <?php echo smarty_function_html_options(array('name'=>'Idkursuoferta','options'=>$_smarty_tpl->tpl_vars['kursoferta']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['Idkursuoferta']),$_smarty_tpl);?>

<?php } else { ?>
  <?php echo smarty_function_html_options(array('name'=>'Idkursuoferta','options'=>$_smarty_tpl->tpl_vars['kursoferta']->value,'class'=>"form-control"),$_smarty_tpl);?>

<?php }?>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label for="Idlektora">Lektor</label>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Idlektora'])) {?>
  <?php echo smarty_function_html_options(array('name'=>'Idlektora','options'=>$_smarty_tpl->tpl_vars['lektor']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['Idlektora']),$_smarty_tpl);?>

<?php } else { ?>
  <?php echo smarty_function_html_options(array('name'=>'Idlektora','options'=>$_smarty_tpl->tpl_vars['lektor']->value,'class'=>"form-control"),$_smarty_tpl);?>

<?php }?>
<div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Maksymalna_liczba_os">Maksymalna_liczba_os</label>
  <input class="form-control" id="Maksymalna_liczba_os" name="Maksymalna_liczba_os" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Maksymalna_liczba_os'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Maksymalna_liczba_os'];
}?>"
    type="text"
    data-minlength="1"
    maxlength="2"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Nrsali">Nrsali</label>
  <input class="form-control" id="Nrsali" name="Nrsali" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nrsali'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nrsali'];
}?>"
    type="text"
    data-minlength="1"
    maxlength="3"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <div class="form-group has-feedback">
    <label for="data_rozpoczecia">data_rozpoczecia</label>
    <input class="form-control" id="data_rozpoczecia" name="data_rozpoczecia" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['data_rozpoczecia'])) {
echo $_smarty_tpl->tpl_vars['data']->value['data_rozpoczecia'];
}?>"
      type="date"
      data-required-error="Pole wymagane"
      required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group has-feedback">
    <div class="form-group has-feedback">
      <div class="form-group has-feedback">
        <label for="data_zakonczenia">data_zakonczenia</label>
        <input class="form-control" id="data_zakonczenia" name="data_zakonczenia" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['data_zakonczenia'])) {
echo $_smarty_tpl->tpl_vars['data']->value['data_zakonczenia'];
}?>"
          type="date"
          data-required-error="Pole wymagane"
          required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group has-feedback">
<?php }
}
