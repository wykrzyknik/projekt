<?php
/* Smarty version 3.1.33, created on 2019-01-21 02:03:18
  from 'C:\xampp\htdocs\lab9\templates\uczestnik\uczestnikForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c451a56d8a5a2_89152926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87edc36f91ac22211d68588950098dc695bf9181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\uczestnik\\uczestnikForm.html.tpl',
      1 => 1548032589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c451a56d8a5a2_89152926 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group has-feedback">
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
  <label for="Data_ur">Data_ur</label>
  <input class="form-control" id="Data_ur" name="Data_ur" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Telefon'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Telefon'];
}?>"
  type="date"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="PESEL">PESEL</label>
  <input class="form-control" id="PESEL" name="PESEL" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['PESEL'])) {
echo $_smarty_tpl->tpl_vars['data']->value['PESEL'];
}?>"
    type="text"
    data-minlength="11"
    maxlength="11"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 11 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Kod_pocztowy">Kod_pocztowy</label>
  <input class="form-control" id="Kod_pocztowy" name="Kod_pocztowy" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Kod_pocztowy'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Kod_pocztowy'];
}?>"
    type="text"
    data-minlength="6"
    maxlength="6"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 6 znaki"
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
  <label for="Numerlokalu">Numerlokalu</label>
  <input class="form-control" id="Numerlokalu" name="Numerlokalu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Numerlokalu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Numerlokalu'];
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
<?php }
}
