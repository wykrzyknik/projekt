<?php
/* Smarty version 3.1.33, created on 2019-04-10 12:14:59
  from 'C:\xampp\htdocs\safe\templates\jezyk\jezykForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadc223af7a76_33386717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e6479dad330322a66a5ab37e6f1c334b2682bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\jezyk\\jezykForm.html.tpl',
      1 => 1546540879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cadc223af7a76_33386717 (Smarty_Internal_Template $_smarty_tpl) {
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
