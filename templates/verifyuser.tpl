<!DOCTYPE html>
<html>

<head>
    {include file="header.tpl"}
</head>

<body>
    <div class="img_container">
        <div class="container">
            {include file="nav.tpl"}
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
            {$msg}

        </div>

    </div>
    {include file="footer.tpl"}
</body>

</html>