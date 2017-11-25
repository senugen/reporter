<?php
require_once 'header.php';
require_once 'HTMLPurifier/HTMLPurifier.auto.php';
$page_title = '首頁';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
switch ($op) {

    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}

require_once 'footer.php';

/*************函數區**************/

//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC LIMIT 0,9";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}

function list_dir()
{
    global $db, $smarty;

    $dir        = "img/";
    $photo_list = [];
// Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                // echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
                if ($file != "." and $file != "..") {
                    $photo_list[] = $file;
                }

            }
            closedir($dh);
        }
    }
// die(var_dump($photo_list));

    $smarty->assign('photo_list', json_encode($photo_list));
}
