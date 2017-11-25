<?php
/* Smarty version 3.1.30, created on 2017-11-04 15:10:05
  from "D:\UniServerZ\www\reporter\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd67cd487762_24284703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844f5c8a1c91b240893eca145cd8f7e7a31a46d1' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\op_list_article.tpl',
      1 => 1509779318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd67cd487762_24284703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
    <?php
}
} else {
?>

    <h1>尚無內容</h1>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
