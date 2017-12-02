<script src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">


<form id="myform" action="admin.php" method="POST" enctype="multipart/form-data" class="my-5">

    <label for="title" class=" col-form-label sr-only">文章標題</label>

    <input type="text" class="form-control validate[required, minSize[4], maxSize[50]]" name="title" id="title" placeholder="文章標題">
    <label for="content" class=" col-form-label sr-only">文章內容</label>
    <textarea name="content" id="content" class="form-control validate[required, minSize[10], maxSize[50]]" rows="10" placeholder="文章內容"></textarea>

    <label for="pic" class=" col-form-label sr-only">圖片上傳</label>
    <input type="file" name="pic" id="pic" class="form-control" placeholder="圖片上傳"></input>


    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="{$smarty.session.username}">
        <button type="submit" class="btn btn-primary">儲存</button>

    </div>


</form>
<script src="ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('content');

    $(document).ready(function () {
        $('#myform').validationEngine();
    });

</script>