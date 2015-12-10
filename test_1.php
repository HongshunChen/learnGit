<?php

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
print_r($rand_keys);
//echo $input[$rand_keys];
//echo $input[$rand_keys[0]] . "\n";
//echo $input[$rand_keys[1]] . "\n";
$params['_']['excludeIdList'][0] = $rand_keys[1];
$params['_']['excludeIdList'][0] = $rand_keys[0];
print_r($params);


$arr[] = '1a';
$arr[] = '2b';
$arr[] = '3c';
$arr[] = '4d';
$arr[] = '5e';
$arr[] = '6f';
$arr[] = '7g';
$arr[] = '8h';
$arr[] = '9i';
$arr[] = '10j';
print_r($arr);
echo join('<br>', $arr);


// echo  file_get_contents("./test.php",true);
//  $homepage = file_get_contents('https://www.baidu.com/');
//echo $homepage;


date_default_timezone_set('PRC'); //默认时区     
echo "今天:", date("Y-m-d H:m:s", time()), "<br>";
echo "今天:", date("Y-m-d", strtotime("18 june 2008")), "<br>";
echo "昨天:", date("Y-m-d", strtotime("-1 day")), "<br>";
echo "明天:", date("Y-m-d", strtotime("+1 day")), "<br>";
echo "一周后:", date("Y-m-d", strtotime("+1 week")), "<br>";
echo "一周零两天四小时两秒后:", date("Y-m-d G:H:s", strtotime("+1 week 2 days 4 hours 2 seconds")), "<br>";
echo "下个星期四:", date("Y-m-d", strtotime("next Thursday")), "<br>";
echo "上个周一:" . date("Y-m-d", strtotime("last Monday")) . "<br>";
echo "一个月前:" . date("Y-m-d", strtotime("last month")) . "<br>";
echo "一个月后:" . date("Y-m-d", strtotime("+1 month")) . "<br>";
echo "十年后:" . date("Y-m-d", strtotime("+10 year")) . "<br>";
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
echo __FILE__;
$name = basename(__FILE__);
echo $name;
print_r($name);
$hanzistr = "陈宏伟顺45，测试";
//mb_internal_encoding("UTF-8");
echo mb_substr($hanzistr, 0, 7, "UTF-8");
echo substr($hanzistr, 0, 17);
$users[] = 'join';
$users = 'jdsfjfjs';
print_r($users);

echo"<br>";
print_r($_SERVER);

function str_explode($str) {
    $str_arr = explode("_", $str);
    print_r($str_arr);
    $str_implode = implode(" ", $str_arr);
    print_r($str_implode);
    $str_implode = implode("", explode(" ", ucwords($str_implode)));


    return $str_implode;
}

$strexplode = str_explode("make_by_id");
print_r($strexplode);


$str = "make_by_id!";
$expStr = explode("_", $str);
for ($i = 0; $i < count($expStr); $i++) {
    echo ucwords($expStr[$i]);
}
echo str_replace(' ', '', ucwords(str_replace('_', ' ', 'open_door')));

function getExt($url) {

    $arr = parse_url($url);

    $file = basename($arr['path']);
    echo $file;
    $ext = explode(".", $file);

    return $ext[1];
}

$url = "http://www.sina.com.cn/abc/de/fg.php?id=1";
echo getExt($url);

//$url = 'http://username:password@hostname/path/ceshi.php?arg=value#anchor';
//
//print_r(parse_url($url));
//
//echo parse_url($url, PHP_URL_PATH);
//
//echo "1) ".basename("/etc/sudoers.d").PHP_EOL;
//echo "2) ".basename("/etc/passwd").PHP_EOL;
//echo "3) ".basename("/etc/").PHP_EOL;
//echo "4) ".basename(".").PHP_EOL;
//echo "5) ".basename("/");
//echo "1) " . dirname("/etc/passwd") . PHP_EOL; // 1) /etc
//echo "2) " . dirname("/etc/fddfg/") . PHP_EOL; // 2) / (or \ on Windows)
//echo "3) " . dirname("."); // 3) .
//$link = 'uploads';
//
//if (is_link($link)) {
//    echo(readlink($link));
//} else {
//    symlink('uploads.php', $link);
//}
function my_scandir($dir) {
    $files = array();
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            // var_dump($handle);
            while (($file = readdir($handle)) !== false) {
                // var_dump($file);
                if ($file != "." && $file != "..") {
                    if (is_dir($dir . "/" . $file)) {
                        $files[$file] = my_scandir($dir . "/" . $file);
                    } else {
                        $files[] = $dir . "/" . $file;
                    }
                }
            }
            closedir($handle);
            return $files;
        }
    }
}

print_r(my_scandir("E:\SWFTools"));



var_dump(is_file('e:/SWFTools/as3compile.exe'));
var_dump(is_dir('bogus_dir/abc/'));

var_dump(is_dir('..')); //one dir up
print_r(scandir("E:\SWFTools"));
echo 8 % (-3);

function strrev1($str) {

    $len = strlen($str);

    $newstr = '';

    for ($i = $len - 1; $i >= 0; $i--) {

        $newstr .= $str{$i};
    }

    return $newstr;
}

echo strrev1("fjasjt");

echo"<br>" . disk_free_space("/") / (1024 * 1024 * 1024);
echo"<br>" . disk_total_space("/") / (1024 * 1024 * 1024) . "</br>";
echo "<br><br>" . disk_free_space("/") / disk_total_space("/") * 100, "%";
//{"isadmin":"0", "group":"", "qsn_attrs": {
//    "user.ighji5ux.zTree": {
//        "=":["ighjiozb"]}, "user.ighjovde.zTree": {
//            "=":["ighjpa yy"]
//        }
//    }
//}
//Array ( [data] => Array ( [0] => Array ( [user_id] => 1 [username] => admin [credit] => 0 [point] => 5 [real_name] => admin [group_name] => 奥瑞文 [email] => [gender] => 女 [mobiletel] => [status] => 已审核 [admin_id] => 1 [onlineNum] => 0 ) [1] => Array ( [user_id] => 12 [username] => zouwq [credit] => 0 [point] => 0 [real_name] => 邹文菁 [group_name] => 研发部 [email] => zouwq@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [2] => Array ( [user_id] => 11 [username] => xiadz [credit] => 0 [point] => 0 [real_name] => 夏德智 [group_name] => 产品部 [email] => xiadezhi@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [3] => Array ( [user_id] => 10 [username] => limu [credit] => 0 [point] => 5 [real_name] => 李沐 [group_name] => 人力资源部 [email] => limu@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [4] => Array ( [user_id] => 9 [username] => qiaol [credit] => 0 [point] => 0 [real_name] => 乔镭 [group_name] => 人力资源部 [email] => qiaolei@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [5] => Array ( [user_id] => 8 [username] => luw [credit] => 0 [point] => 0 [real_name] => 卢薇 [group_name] => 人力资源部 [email] => luwei@orivon.com [gender] => 女 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [6] => Array ( [user_id] => 7 [username] => mas [credit] => 0 [point] => 5 [real_name] => 马烁 [group_name] => 人力资源部 [email] => mas@orivon.om [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [7] => Array ( [user_id] => 6 [username] => yukh [credit] => 0 [point] => 0 [real_name] => 余凯航 [group_name] => 运营部 [email] => yukh@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [8] => Array ( [user_id] => 5 [username] => huzc [credit] => 0 [point] => 0 [real_name] => 胡紫成 [group_name] => 销售部 [email] => huzc@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) [9] => Array ( [user_id] => 4 [username] => liuzy [credit] => 0 [point] => 0 [real_name] => 刘子烟 [group_name] => 产品部 [email] => liuzy@orivon.com [gender] => 男 [mobiletel] => [status] => 已审核 [admin_id] => [onlineNum] => 0 ) ) )
 $stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
$trans = array("a" => 1, "b" => 1, "c" => 2);
$trans = array_flip($trans);
$original = strtr($str, $trans);
$test = Array ( 
    'admin' => Array ( 'username' => 'admin' ,'nickname' => 'admin',  ) 
    );
unset($test['admin']['username']);
print_r($test);


$test="";
$temp=  explode(" ",$test);
print_r($temp);
$res[0]['data']='{"iglu11ay":{"id":"iglu11ay","pId":"0","name":"1"},"iglu14pl":{"id":"iglu14pl","pId":"0","name":"2"},"iglu17pd":{"id":"iglu17pd","pId":"0","name":"3"}}';
$data=json_decode($res[0]['data'], true);
print_r($data);


$stack = array("orange", "banana");
array_push($stack, $stack);
$stack[]='ceshi';
$stack[0]='hahaha';
print_r($stack);

$foo = 'NULL';
var_dump(isset($foo));   // FALSE