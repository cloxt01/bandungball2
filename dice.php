<?php
function ocr($url,$data,$formid){
  $characters = "abcdefghijklmnopqrstuvwxyz0123456789";
  $charactersLength = strlen($characters);
  $sessid = "";
    for ($ii = 0; $ii < 27; $ii++) {
      $sessid .= $characters[rand(0, $charactersLength - 1)];
      }
  $u[]="Host: www.i2ocr.com";
  $u[]="Connection: keep-alive";
  $u[]="Content-Length: ".strlen($data);;
  $u[]="Accept: */*";
  $u[]="Content-Type: multipart/form-data; boundary=----WebKitFormBoundary$formid";
  $u[]="User-Agent: Mozilla/5.0 (Linux; Android 11; M2004J19C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Mobile Safari/537.36";
  $u[]="Origin: https://www.i2ocr.com";
  $u[]="Referer: https://www.i2ocr.com/free-online-indonesian-ocr";
  $u[]="Accept-Encoding: gzip, deflate, br";
  $u[]="Cookie: __gads=ID=5db11461352e934b-223a4c6e18d800a1:T=1667719615:RT=1667719615:S=ALNI_MbBs8RJasumT102_RyxAWvhuKugbQ; __gpi=UID=00000b763e395d73:T=1667719615:RT=1667719615:S=ALNI_MY5HX2lcQfonpZ8g_6BJ0-Q5qce6Q; __utmz=180760831.1667723676.2.2.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); cookieconsent_status=dismiss; PHPSESSID=$sessid; SERVERID=s1; sc_is_visitor_unique=rx8755177.1667728803.116AA2BCD30C4F731A7926946008D1CA.3.3.2.2.2.2.2.2.2; __utma=180760831.1917495442.1667719612.1667723676.1667728804.3; __utmc=180760831; __utmt=1; __utmb=180760831.1.10.1667728804";
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_ENCODING => "gzip",
    ));
    return curl_exec($ch);
    curl_close($ch);
}
function save_record_image($base,$name){
	$API_KEY = 'b395fe17aea4314536e29461bfafa764';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://api.imgbb.com/1/upload?key='.$API_KEY);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	$filename = $name;
	$data = array(
	  'image' => $base,
	  'name' => $filename);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    return 'Error:' . curl_error($ch);
	}else{
		return json_decode($result, true);
	}
	curl_close($ch);
}
function reg($url,$coo,$inv){
  $u[]="Host: www.bandungball.com";
  $u[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36";
  $u[]="accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8";
  $u[]="referer: https://www.bandungball.com/home/reg/";
  $u[]="accept-encoding: gzip, deflate, br";
  $u[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $u[]="cookie: FROM=4";
  $u[]="cookie: D=638"."$coo"."cecf4a";
  $u[]="cookie: I=$inv";
  $ch=curl_init($url);
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_ENCODING => "gzip",
    ));
    return curl_exec($ch);
    curl_close($ch);
}
function pagekey($url,$coo,$inv){
  $u[]="Host: www.bandungball.com";
  $u[]="upgrade-insecure-requests: 1";
  $u[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36";
  $u[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $u[]="referer: https://www.bandungball.com/home/login/";
  $u[]="accept-encoding: gzip";
  $u[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $u[]="cookie: FROM=4";
  $u[]="cookie: D=638"."$coo"."cecf4a";
  $u[]="cookie: I=$inv";
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_ENCODING => "gzip"
    ));
    $results=curl_exec($ch);
    return $results;
    curl_close($ch);
}
function regis($url,$coo,$data,$inv){
  $u[]="Host: www.bandungball.com";
  $u[]="content-length: ".strlen($data);
  $u[]="upgrade-insecure-requests: 1";
  $u[]="origin: https://www.bandungball.com";
  $u[]="content-type: application/x-www-form-urlencoded";
  $u[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36";
  $u[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $u[]="referer: https://www.bandungball.com/home/reg/";
  $u[]="accept-encoding: gzip";
  $u[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $u[]="cookie: FROM=4";
  $u[]="cookie: D=638"."$coo"."cecf4a";
  $u[]="cookie: I=$inv";
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_POSTFIELDS=> $data,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_ENCODING => "gzip"
    ));
    $results=curl_exec($ch);
    return $results;
    curl_close($ch);
}
function pass() {
    $name = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    );

    $username = $name[rand ( 0 , count($name) -1)];
    $username .= rand(100,999);
    return $username;
}
function nickname() {
    $name = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    );
    $username = $name[rand ( 0 , count($name) -1)];
    return $username;
}
function phone(){
  $firstnumber = array("831", "812", "896", "878", "857","895","877","856");
  $phone=$firstnumber[rand ( 0 , count($firstnumber) -1)];
  $rand=rand(1000,9999);
  $randv2=rand(1000,9999);
  $phone.=("$rand");
  $phone.=("$randv2");
  return $phone;
}
$i=0;
while(true):
$inv="2041630";
$coo=rand(1000, 9999);
$url="https://www.bandungball.com/home/reg/";
$pagekeyy=pagekey($url,$coo,$inv);
preg_match_all('#<input type="hidden" name="pagekey" value="(.*?)" />#is',$pagekeyy,$pagekeyyy);
$pagekey=$pagekeyyy[1][0];
if ($pagekey!=false){
$phone=phone();
$pass=pass();
$nickname=nickname();
$url="https://www.bandungball.com/home/security_code/1669635034/0.42204634656985607";
$captcha=reg($url,$coo,$inv);
$captcha_id=rand(1000,9999);
$file_captcha="captcha.jpg";
$ifp=fopen($file_captcha,'wb');
$data=explode(',',$file_captcha);
fwrite($ifp,$captcha);
fclose($ifp); 
system("convert $file_captcha -white-threshold 20000 captcha.jpg");
$base=base64_encode(file_get_contents("captcha.jpg"));
$name = "captchasolved";
$get=save_record_image($base,$name);
$url_captcha=$get['data']['url'];
$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  $charactersLength = strlen($characters);
  $formid = "";
    for ($ii = 0; $ii < 16; $ii++) {
      $formid .= $characters[rand(0, $charactersLength - 1)];
      }
$url="https://www.i2ocr.com/process_form";
$data="------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"i2ocr_languages\"


gb,eng
------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"i2ocr_options\"

url
------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"ocr_type\"

1
------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"i2ocr_uploadedfile\"


------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"i2ocr_url\"

$url_captcha
------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"x\"


------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"y\"


------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"w\"


------WebKitFormBoundary$formid
Content-Disposition: form-data; name=\"h\"


------WebKitFormBoundary$formid--";

$exec_captcha=ocr($url,$data,$formid);
$captcha = preg_replace("/[^0-9]/","", $exec_captcha);
$captchaval=$captcha[3];
$captchaval.=$captcha[4];
$captchaval.=$captcha[5];
$captchaval.=$captcha[6];
$url="https://www.bandungball.com/home/reg/";
$data="phone=$phone&password=$pass&nickname=$nickname&scode=$captchaval&spread_id=&pagekey=$pagekey&inviter_code=$inv";
$reg=regis($url,$coo,$data,$inv);
$info=substr_count($reg,"Pendaftaran berhasil");
if ($info!=1){
  echo("GAGAL MENDAFTAR\n");
} else {
  $i++;
  echo("SUKSES MENDAFTAR [ $i ] \n");
}
sleep(1);
} else {
  echo ("SILAHKAN GANTI IP ADDRESS\n");
  $ip=readline("Jika sudah klik ENTER");
  if ($ip==''){
    echo("\r                                   \r");
  } else {
    echo("exit\n");
    system("exit");
  }
}
endwhile;