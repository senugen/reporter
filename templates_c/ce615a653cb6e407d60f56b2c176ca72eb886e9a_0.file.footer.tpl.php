<?php
/* Smarty version 3.1.30, created on 2017-11-04 14:07:51
  from "D:\UniServerZ\www\reporter\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd5937ee1b99_06328450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce615a653cb6e407d60f56b2c176ca72eb886e9a' => 
    array (
      0 => 'D:\\UniServerZ\\www\\reporter\\footer.tpl',
      1 => 1509775665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd5937ee1b99_06328450 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/jquery-3.2.1.min.js ">

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js "><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js "><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        // var images = ['pic1.jpg', 'pic2.jpg'];
        var images = <?php echo $_smarty_tpl->tpl_vars['photo_list']->value;?>

        $('.img_container').css({ 'background-image': 'url(img/' + images[Math.floor(Math.random() * images.length)] + ')' });

        // var txt = ['大家好', '歡迎光臨'];
        // $('title').text(  txt[Math.floor(Math.random() * txt.length)] );

        $('.img_container').css('width', $(window).width());
        $('.img_container').css('height', $(window).height());
    });
    $(window).resize(function () {
        $('.img_container').css('width', $(window).width());
        $('.img_container').css('height', $(window).height());
    });

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
