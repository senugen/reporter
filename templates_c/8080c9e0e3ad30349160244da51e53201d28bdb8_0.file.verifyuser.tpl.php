<?php
/* Smarty version 3.1.30, created on 2017-11-11 10:09:25
  from "D:\UniServerZ\www\reporter\templates\verifyuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a065bd5da7dc0_25781586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8080c9e0e3ad30349160244da51e53201d28bdb8' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\templates\\verifyuser.tpl',
      1 => 1510366118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a065bd5da7dc0_25781586 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
    <div class="img_container">
        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <h1 class="text-white"> BootStrap4容器及網格概念</h1>
            <div class="row">
                <div class="text-white col-sm-4 my-4">
                    <p>BootStrap4的網格系統以 flexbox（CSS3）為基礎（取代 table、floats…），因此可以做到自動等寬等高的欄位 、自動平均欄位、垂直置中等以往很難做的功能。</p>
                </div>
                <div class="text-white col-sm-4 ">
                    <p>BootStrap4的網格系統以 flexbox（CSS3）為基礎（取代 table、floats…），因此可以做到自動等寬等高的欄位 、自動平均欄位、垂直置中等以往很難做的功能。</p>
                </div>
                <div class="text-white col-sm-4 ">
                    <p>BootStrap4的網格系統以 flexbox（CSS3）為基礎（取代 table、floats…），因此可以做到自動等寬等高的欄位 、自動平均欄位、垂直置中等以往很難做的功能。</p>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- 自動載入 $op 對應的樣板檔 -->
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>


        </div>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
