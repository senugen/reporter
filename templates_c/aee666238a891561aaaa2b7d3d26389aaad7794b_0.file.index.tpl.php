<?php
/* Smarty version 3.1.30, created on 2017-11-18 15:55:29
  from "D:\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe7711f3959_63050545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aee666238a891561aaaa2b7d3d26389aaad7794b' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1510991702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0fe7711f3959_63050545 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- 自動載入 $op 對應的樣板檔 -->
    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
