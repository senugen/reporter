<?php
/* Smarty version 3.1.30, created on 2017-11-04 15:11:03
  from "D:\UniServerZ\www\reporter\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd680710a1f0_42920631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd647af3af5c4a1530b206c13c5506127f22ac08e' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\op_show_article.tpl',
      1 => 1509779275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd680710a1f0_42920631 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
</div><?php }
}
