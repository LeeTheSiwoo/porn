<?php
/*
credit ⚡️D-Jukie
*/
function jukiee($ww) {
mt_srand( (double)microtime() * 1000000000000000000 );
$stt = array_rand($ww);
return $ww[$stt];
}
function jukie($path) {
$images = array();
if ( $img_ww = @opendir($path) ) {
while ( false !== ($img_www = readdir($img_ww)) ) {
if ( preg_match("/(\.mkv|\.m4a|\.mp4)$/", $img_www) ) {
$images[] = $img_www;
}
}
closedir($img_ww);
}
return $images;
}
$root = '';
$path = 'images/'; //tên thư mục chứa ảnh
$demo = 'https://anotepad.com/note/read/28y7nda4'; //module lấy ảnh, thay link r sử dụng
$list = jukie($root . $path);
$link = 'https://porn.s4g0r.repl.co/';  //thay link relp/domain vào
$img = jukiee($list);
$duma = 0;
$countfiles = glob($path . "*.{mkv,m4a,mp4}",GLOB_BRACE);
if ($countfiles){
$duma = count($countfiles);
}
$api1 = array(
"data" => $link . $path . $img,
"status" => "success",
"count" => $duma,
"author" => "D-Jukie",
"demo module" => $demo,
"Image source" => "D-Jukie"

);
$rdimg = json_encode($api1, JSON_UNESCAPED_SLASHES);
print($rdimg); 
?>