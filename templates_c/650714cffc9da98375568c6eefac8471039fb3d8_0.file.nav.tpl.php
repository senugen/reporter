<?php
/* Smarty version 3.1.30, created on 2017-11-25 16:34:12
  from "D:\UniServerZ\www\reporter\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a192b04c59dc9_80320641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650714cffc9da98375568c6eefac8471039fb3d8' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\templates\\nav.tpl',
      1 => 1511598846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a192b04c59dc9_80320641 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-0 mb-5">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="menu">


        <div class="navbar-nav mr-auto">

            <a href="index.php" class="nav-link text-white">首頁</a>
            <a href="index.php" class="nav-link text-white">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a>
        </div>
        <div class="navbar-nav ">
            <?php if (isset($_SESSION['username'])) {?>
            <a href="admin.php?op=article_form" class="nav-link text-white">發佈</a>
            <a class="nav-link text-white" href="logout.php">登出</a> <?php } else { ?>
            <a href="signup.php" class="nav-link text-white">註冊</a>
            <a class="nav-link text-white" href="main_login.php">登入</a> <?php }?>
        </div>
    </div>

</nav><?php }
}
