<?php
/* Smarty version 3.1.30, created on 2017-11-18 15:55:29
  from "D:\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe77125d0e0_62278385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75dcd433e7e2830d26db032fe555aca77b11443' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1510991722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe77125d0e0_62278385 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img_container">
    <h1 class="text-white"> BootStrap4容器及網格概念</h1>

</div>

<div class="container mt-3">
</div>



<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>

    <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>

        <div class="col-sm-4">

            <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 " class="cover rounded"> <?php } else { ?>
            <img src="https://picsum.photos/300/200?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 " class="cover rounded">            <?php }?>

            <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>

        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>

</div><?php }
}
