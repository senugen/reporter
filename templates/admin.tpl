<!doctype html>
<html lang="en">

<head>
    {include file="header.tpl"}
</head>

<body>
    {include file="nav.tpl"}
    <div class="img-container">
        <div class="container pt-4">
            <!-- 自動載入 $op 對應的樣板檔 -->
            {include file="op_`$op`.tpl"} {include file="footer.tpl"}
        </div>
    </div>



</body>

</html>