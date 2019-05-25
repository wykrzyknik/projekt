<?php
/* Smarty version 3.1.33, created on 2019-01-13 00:47:59
  from 'C:\xampp\htdocs\lab9\templates\lektor\lektorForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a7caf395508_98902412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ce2736ff2c91cb71a569a15ca176395dc6830e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\lektor\\lektorForm.html.tpl',
      1 => 1547336874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3a7caf395508_98902412 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group has-feedback">
  <label for="Nazwisko">Nazwisko</label>
  <input class="form-control" id="Nazwisko" name="Nazwisko" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwisko'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwisko'];
}?>"
    type="text"
    data-minlength="2"
    maxlength="100"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Imie">Imie</label>
  <input class="form-control" id="Imie" name="Imie" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Imie'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Imie'];
}?>"
    type="text"
    data-minlength="2"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Telefon">Telefon</label>
  <input class="form-control" id="Telefon" name="Telefon" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Telefon'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Telefon'];
}?>"
  type="text"
  data-minlength="12"
  maxlength="12"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 12 znaki"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Email">Email</label>
  <input class="form-control" id="Email" name="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Email'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Email'];
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
  <label for="Miasto">Miasto</label>
  <input class="form-control" id="Miasto" name="Miasto" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Miasto'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Miasto'];
}?>"
  type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 1 znak"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Ulica">Ulica</label>
  <input class="form-control" id="Ulica" name="Ulica" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Ulica'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Ulica'];
}?>"
  type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 1 znak"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Numerdomu">Numerdomu</label>
  <input class="form-control" id="Numerdomu" name="Numerdomu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Numerdomu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Numerdomu'];
}?>"
  type="text"
  data-minlength="1"
  maxlength="10"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 1 znak"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Numerlokalu">Numerlokalu</label>
  <input class="form-control" id="Numerlokalu" name="Numerlokalu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Numerlokalu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Numerlokalu'];
}?>"
  type="text"
  data-minlength="0"
  maxlength="10"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 1 znak">
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<?php }
}
