<?php
/* Smarty version 3.1.30, created on 2017-11-25 12:19:56
  from "D:\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18ef6c74a7f0_04523017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a64f94df748a4a9ae25b428b5fb26bf0e475a1' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1511583530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a18ef6c74a7f0_04523017 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
    <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $_smarty_tpl->tpl_vars['article']->value['username']) {?>

    <br><a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
    <a href="admin.php?op=modify_article_form&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning ">修改</a> <?php }?>

</div><?php }
}
