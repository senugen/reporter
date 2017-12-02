<form action="admin.php" method="POST" enctype="multipart/form-data" class="my-5">

    <label for="title" class=" col-form-label ">文章標題</label>

    <input type="text" class="form-control" name="title" id="title" placeholder="文章標題" value="{$article.title}">
    <label for="content" class=" col-form-label sr-only">文章內容</label>
    <textarea name="content" id="content" class="form-control" rows="10" placeholder="文章內容">{$article.content}</textarea>

    <label for="pic" class=" col-form-label sr-only">圖片上傳</label>
    <input type="file" name="pic" id="pic" class="form-control" placeholder="圖片上傳"></input>


    <div class="text-center">
        <input type="hidden" name="sn" value="{$article.sn}">
        <input type="hidden" name="op" value="update">
        <input type="hidden" name="username" value="{$smarty.session.username}">
        <button type="submit" class="btn btn-primary">儲存</button>

    </div>


</form>
<script src="ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('content');

</script>