<?php
/* Smarty version 3.1.33, created on 2018-12-11 20:31:59
  from 'C:\xampp\htdocs\lab9\templates\baseTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1010afe96ad2_97677604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003dbd8d5ee33b31d18542f250e4d83942351cca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab9\\templates\\baseTemplate.html.tpl',
      1 => 1544108154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerBlock.html.tpl' => 1,
    'file:./navbarBlock.html.tpl' => 1,
    'file:./bodyBlock.html.tpl' => 1,
    'file:./footerBlock.html.tpl' => 1,
  ),
),false)) {
function content_5c1010afe96ad2_97677604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./headerBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbarBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./bodyBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./footerBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
