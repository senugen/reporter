<?php
/* Smarty version 3.1.30, created on 2017-11-25 15:33:13
  from "D:\UniServerZ\www\reporter\templates\op_modify_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a191cb98f5842_18237627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7fa96e1d9a823b9db497990c4ef86955d7ca67' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\templates\\op_modify_article_form.tpl',
      1 => 1511595188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a191cb98f5842_18237627 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="admin.php" method="POST" enctype="multipart/form-data">

    <label for="title" class=" col-form-label ">文章標題</label>

    <input type="text" class="form-control" name="title" id="title" placeholder="文章標題" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
    <label for="content" class=" col-form-label sr-only">文章內容</label>
    <textarea name="content" id="content" class="form-control" rows="10" placeholder="文章內容"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>

    <label for="pic" class=" col-form-label sr-only">圖片上傳</label>
    <input type="file" name="pic" id="pic" class="form-control" placeholder="圖片上傳"></input>


    <div class="text-center">
        <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
        <input type="hidden" name="op" value="update">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">儲存</button>

    </div>


</form>
<?php echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

<?php echo '</script'; ?>
><?php }
}
