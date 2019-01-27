<?php
date_default_timezone_set("Asia/Jakarta");
@system("clear");
@system("rm -rf user");
@system("git clone https://github.com/eftechanel/user");
@system("mkdir user/json");
@system("clear");
require"modul.php";
echo$figlet.$t.$t;
sleep(1);
error_reporting(0);
require __DIR__."/user/user.php";
echo$msgwe.$t;
$member=count($data);
$date=new DateTime();
echo$putih."[ ".$date->format("H:i:s d/m/Y")." ]  ";
echo$putih."[ Member : ".$turkis.$member.$putih." ]".$r;
   if($stat_ads){
echo$ads.$t;
}
sleep(3);
$data_user=$data;
   if(!isset($data_user)){
echo"[!] git belum di install".$t."[•] pkg install git".$t;
exit;
}
   if($we_stat){
$acc=count($config);
$def=30;
   if($delay>=$def){
$a=$delay/$acc+1;
}
 else{
$a=$def/$acc+1;
}
$sleep=substr($a,0,4);
echo$putih."[$turkis?$putih] cek akun ";
sleep(2);
$bot=0;
while($bot<$acc){
$tiket=$config[$bot];
$bot++;
$js=json_decode(invite($tiket),true);
   if($js["code"]=="200"){
echo$red."•";
}
 else{
echo$ijo."•";
}
sleep(1);
}
echo$putih.$t."[".$ijo."=".$putih."] total akun [".$turkis.$acc.$putih."]".$t;
sleep(1);
   if($acc>$delay){
echo$putih."[".$kuning."-".$putih."]$kuning max 30 akun bro".$t;
exit;
}
echo$kuning."[$red!$kuning]$putih validasi account".$t;
sleep(1);
$page=0;
echo"[".$ijo."-".$putih."] download data ";
while(true){
$page++;
$cfg=$config[0];
$js=json_decode(lis($cfg,$page),true);
$code=$js["code"];
$acc_data=$js["data"]["apprentice_list"];
$tot=$js["data"]["apprentice_total"];
$akun=count($acc_data);
   if($code==200){
  if($akun!=null){
$validasi1=true;$json_data=json_encode($acc_data);
file_put_contents("user/json/data".$page.".json",$json_data);
echo$ijo."•";
}
 else{
$validasi2=true;
break;
 }
}
 else{
$kuning."[•] terjadi kesalahan".$t;
@system("rm -rf user");
exit;
 }
}
   if($validasi1){
$total=$page;
$acc=count($config);
echo$t;
  for($i=0;$i<$acc;$i++){
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$js=json_decode(login($token,$meid),true);$code=$js["code"];
$msg=$js["msg"];
$vip=$js["data"]["userMsg"]["level"];
$nik=$js["data"]["userMsg"]["nickname"];
$gold=$js["data"]["userMsg"]["gold_flag"];
$bal=$js["data"]["userMsg"]["balance"];
$inco=$js["data"]["userMsg"]["invitation_code"];
$nk=substr($nik,0,8);
   if($nik==null){
echo$red."[!] null masalah jaringan ".$kuning."[-] tiket salah".$t;
@system("rm -rf user");
exit;
}
 elseif($code=="200"){
 foreach($data_user as$user1){
  for($x=1;$x<$total;$x++){
$get=file_get_contents("user/json/data".$x.".json");
$data=json_decode($get,true);$join=array_merge_recursive($data,$data);
 foreach($join as$user){
$tuyul=$user["user"]["nickname"];
   if($nik==$tuyul OR$nik==$user1 OR$inco==$user1){
$msg="ok";
}
 else{
$error=true;
    }
   }
  }
 }
}
 elseif($code=="9999"){
echo$kuning."[$red!$kuning] ".$msg.$t.$putih.$t;
echo$kuning."[$red!$kuning]$red ambil tiket baru".$t;
@system("rm -rf user");
exit;
}
   if($msg=="ok"){
echo$putih."[".$ijo."•".$putih."] ".$biru.$nk.$putih."	| gold$red : ".$turkis.$gold.$putih." | balance$red :$putih \$ ".$turkis.$bal."$putih | VIP$red :$turkis ".$vip.$putih.$t;
}
 elseif($error){
echo$kuning."[$red!$kuning] ".$nk.$putih."	| gold$red : ".$ijo.$gold.$putih." | balance$red :$putih \$ ".$ijo.$bal."$putih | VIP$red :$ijo ".$vip.$t;
echo$red."[•] ".$kuning.$nik.$turkis." bukan member !".$putih.$t;
$err=true;
}
sleep(1);
 }
}
 elseif($validasi2){
$acc=count($config);
echo$t;
   for($i=0;$i<$acc;$i++){
$token=substr($config[$i],7,-22);$meid=substr($config[$i],-16);
$js=json_decode(login($token,$meid),true);
$code=$js["code"];
$msg=$js["msg"];
$vip=$js["data"]["userMsg"]["level"];
$nik=$js["data"]["userMsg"]["nickname"];
$gold=$js["data"]["userMsg"]["gold_flag"];
$bal=$js["data"]["userMsg"]["balance"];
$inco=$js["data"]["userMsg"]["invitation_code"];
$nk=substr($nik,0,8);
   if($nik==null){
echo$red."[!] null masalah jaringan ".$kuning."[-] tiket salah".$t;
@system("rm -rf user");
exit;
}
 elseif($code=="200"){
 foreach($data_user as$user1){
   if($nik==$user1){
$msg="ok";
}
 else{
$error=true;
  }
 }
}
 elseif($code=="9999"){
echo$kuning."[$red!$kuning]$red ".$msg.$t.$putih.$t;
echo$kuning."[$red!$kuning] ambil tiket baru".$t;
@system("rm -rf user");
exit;
}
   if($msg=="ok"){
echo$putih."[".$ijo."•".$putih."] ".$biru.$nk.$putih."	| gold$red : ".$turkis.$gold.$putih." | balance$red :$putih \$ ".$turkis.$bal."$putih | VIP$red :$turkis ".$vip.$t;
}
 elseif($error){
echo$kuning."[$red!$kuning]$red ".$nk.$putih."	| gold$red : ".$ijo.$gold.$putih." | balance$red :$putih \$ ".$ijo.$bal."$putih | VIP$red :$ijo ".$vip.$t;
echo$putih."[".$kuning."-".$putih."] ".$kuning.$nik.$turkis." bukan member ".$t;
$err=true;
}
sleep(1);
 }
}
   if($err){
echo$turkis."[•]$putih PM$ijo WhatsApp$putih => +6285218219161".$t;
@system("rm -rf user");
exit;
}
 else{
$fiture=true;
 }
}
 else{
echo$kuning."[$red!$kuning] ".$kuning.$nik.$red." Permission denied".$t;
@system("rm -rf user");
echo$putih.$msgwe.$t;
exit;
}
   if($fiture){
echo$putih."[".$turkis."w".$putih."] cek absen".$t;
  for($i=0;$i<$acc;$i++){
sleep(1);
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$js=json_decode(login($token,$meid),true);
$nik=$js["data"]["userMsg"]["nickname"];
echo$putih."[".$ijo."•".$putih."] ".
$biru.substr($nik,0,8).$red." : ";
$cekin=json_decode(cekin($tiket),true);
$code=$cekin["code"];
$msg=$cekin["msg"];
    if($code=="200"){
echo$putih." +".$turkis.$cekin["data"]["gold_flag"].$t;
sleep($sleep);
}
 else{
echo$kuning.$msg.$t;
 }
}
sleep(1);
echo$putih."[".$turkis."w".$putih."] treasure box".$t;
sleep(1);
   for($i=0;$i<$acc;$i++){
sleep(1);
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$js=json_decode(login($token,$meid),true);
$nik=$js["data"]["userMsg"]["nickname"];
echo$putih."[".$ijo."•".$putih."] ".
$biru.substr($nik,0,8).$red." : ";
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$box=json_decode(box($token,$meid),true);
$code=$box["code"];
$msg=$box["msg"];
$gold=$box["data"]["gold_tribute"];
   if($code==200){
echo$putih."+$turkis".$gold.$t;
sleep($sleep);
}
 else{
echo$kuning.$msg.$t;
 }
}
sleep(1);
echo$putih."[".$turkis."w".$putih."] watching video vip today".$t;
sleep(1);
$limit=0;
while(true){
   for($i=0;$i<$acc;$i++){
sleep(1);
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$js=json_decode(login($token,$meid),true);
$nik=$js["data"]["userMsg"]["nickname"];
echo$putih."[".$ijo."•".$putih."] ".$biru.substr($nik,0,8).$putih." => ";
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$js=json_decode(video($token,$meid),true);$code=$js["code"];
$msg=$js["msg"];
$gold=$js["data"]["gold_flag"];
$coun=$js["data"]["count"];
$update=$js["data"]["isUpdate"];
$vip=$js["data"]["userLevel"];
   if($code=="200"){
echo$ijo."Sukses$putih | gold$red :$putih +$turkis".$gold."$putih | ViP$red : $turkis".$vip.$t;
$limit=0;
}
 else{
echo$kuning.substr($msg,0,32).$t;
$limit++;
}
sleep($sleep);
}
   if($limit>=$acc){
echo$ijo.$msgwe.$t;
@system("rm -rf user");
break;
}
$q=0;
sleep(1);
echo$putih."[".$turkis."w".$putih."] sleep [ ".$turkis.$sleep.$putih." sec ] ".$t;
echo$putih."[".$turkis."w".$putih."] rolling ".$ijo;
while($q<5){
$q++;
echo"•";
sleep(1);
}
echo$t;
 }
}

?>
