
<?php
$biru="[1;34m";$turkis="[1;36m";$ijo="[92m";$putih="[1;37m";$pink="[1;35m";$red="[1;31m";$kuning="[1;33m";$t="
";$r="

";
require"cfg.php";
$figlet=$putih."
    __    __      _       _        ___     _____
   / /    \ \__ _| |_ ___| |__    ( _ )   | ____|__ _ _ __ _ __
   \ \ /\ / / _` | __/ __| '_ \   / _ \/\ |  _| / _` | '__| '_ \
    \ V  V / (_| | || (__| | | | | (_>  < | |__| (_| | |  | | | |
     \_/\_/ \__,_|\__\___|_| |_|  \___/\/ |_____\__,_|_|  |_| |_|$putih
   
            [$red v.2.0 $putih| creator: ".$ijo."eftechanel".$putih." | code: ".$ijo."Z25299$putih ]
                    
                     [".$red."-".$putih."] ".$kuning."Bot Multipe Account".$putih." [".$ijo."-".$putih."]".$r;
function video($token,$meid){
$header="sensor: 1
country: ID
brand: Xiaomi
version: 2.3.0
ratio: 1080*1920
language: in
ticket: $token
meid: $meid
lat: -6.8855166
lng: 107.622826
os: android
cpu: 1
bh: 1";
$url="http://main.masjmzs.com/app/mission_new/handler";
  $head=array();
$head[]=$header;$video="BtFc9FV1ii8lHfIyJGZnizSnbDimyRavi6+gHFuSbMi6AqVNgEXYVgZHge2kKBlM2v63QUyggvQT6zODgdY2ew==";
  $ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_TIMEOUT,30);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$head);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$video);$result=curl_exec($ch);
curl_close($ch);
return$result;
}
function box($token,$meid){
$header="sensor: 1
country: ID
brand: Xiaomi
version: 2.3.0
ratio: 1080*1920
language: in
ticket: $token
meid: $meid
lat: -6.8855166
lng: 107.622826
os: android
cpu: 1
bh: 1";
$url="http://main.masjmzs.com/app/mission_new/handler";
  $head=array();
$head[]=$header;
$box="Nh8SU/WIbxgBosRfIFWURVkVX8kBhsDxFVrPMMghk+PVQ3PGBLiKYdlhBBH8CVk5164VA6HIelnoewdK2Zfc+g==";$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_TIMEOUT,30);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$head);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$box);$result=curl_exec($ch);
curl_close($ch);
return$result;
}
function login($token,$meid){
$header="sensor: 1
country: ID
brand: Xiaomi
version: 2.3.0
ratio: 1080*1920
language: in
ticket: $token
meid: $meid
lat: -6.8855166
lng: 107.622826
os: android
cpu: 1
bh: 1";
  $head=array();
$head[]=$header;
$data=["nonce_str"=>"nmtucRBbvJL","sign"=>"","time"=>"1547591201435"];
$body=json_encode($data);
    $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "http://www.masjmzs.com/app/User/index",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>$body,
   CURLOPT_HTTPHEADER=>$head,
   CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}
function invite($tiket){
   $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "http://www.masjmzs.com/app/mission_new/handler?id=11",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>"language=in&".$tiket."&sign=&os=android&version=2.3.0&code_or_phone=V22976",CURLOPT_HTTPHEADER=>["country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],
   CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}
function exe($tiket){
   $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "http://www.masjmzs.com/app/cash/exchange",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>"language=in&".$tiket."&sign=&os=android",
   CURLOPT_HTTPHEADER=>[
"country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/x-www-form-urlencoded","Referer"=>"http://com.masjmzs.com/personal/incomeDetails.html?type=1","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],
   CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}
function lis($cfg,$page){
    $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "http://www.masjmzs.com/app/Apprentice/apprenticeList",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>"language=in&".$cfg."&sign=&os=android&version=2.3.0&page=".$page."&type=1&pageSize=",
   CURLOPT_HTTPHEADER=>["Accept-Language"=>"id-ID,en-US;q=0.8","Content-Type"=>"application/x-www-form-urlencoded; charset=UTF-8","Accept-Encoding"=>"gzip,deflate","User-Agent"=>"Mozilla/5.0 (Linux; Android 7.0; Mi-4c Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.125 Mobile Safari/537.36",],
   CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}
function cekin($tiket){
   $curl=curl_init();
curl_setopt_array($curl,array(
   CURLOPT_RETURNTRANSFER=>true,
   CURLOPT_URL=> "http://www.masjmzs.com/app/mission_new/handler",
   CURLOPT_TIMEOUT=>30,
   CURLOPT_POST=>true,
   CURLOPT_POSTFIELDS=>"id=22&".$tiket."&sign=&os=android&",
   CURLOPT_HTTPHEADER=>[
"country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.1","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],
   CURLOPT_SSL_VERIFYPEER=>true,));$result=curl_exec($curl);
curl_close($curl);
return$result;
}

?>
