<?php
/* Smarty version 3.1.33, created on 2019-01-03 19:41:26
  from 'C:\xampp\htdocs\lab9\templates\jezyk\jezykForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e5756611cc4_83228504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ee21f715d64e6f102eedf64fe97e0fa0be3e23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\jezyk\\jezykForm.html.tpl',
      1 => 1546540879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2e5756611cc4_83228504 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group has-feedback">
  <label for="NazwaJezyka">NazwaJezyka</label>
  <input class="form-control" id="NazwaJezyka" name="NazwaJezyka" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NazwaJezyka'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NazwaJezyka'];
}?>"
    type="text"
    data-minlength="2"
    maxlength="10"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 10 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<?php }
}
