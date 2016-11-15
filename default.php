<?php
 
/* == ID tài kho?n mu?n tang share == */
$user = 'Blablabla.cut3';
/* == Token tài kho?n ch?a page == */
$token = 'EAAAAAYsX7TsBAMpDwtFRWzXA83vPXIeVjdHsA20JsnvCjD0ZAfNKwWXYeRNqOskSSoLRZAdpzZAXlNqlpE11zv0PDxOUx5Scu9Uf7HoemMvkanYYCWuFdmb02cBxS2y44m47SIXYdJkcJJlIZCtx8fkEQWXZAHYRLTggfI6TtyAH4g3BLuAEZA8PmMgBB04NBxZAzOsKHTs2AZDZD';
$accounts = json_decode(cURL('https://graph.facebook.com/me/accounts?access_token=' . $token),true);
 
$feed = json_decode(cURL('https://graph.facebook.com/' . $user . '/feed?access_token='.$token.'&limit=1'),true);
 
foreach ($accounts['data'] as $data) {
    //echo $data['access_token'] . '<br/>';
    echo cURL('https://graph.facebook.com/' . $feed['data'][0]['id'] . '/sharedposts?method=post&access_token='.$data['access_token']) . '<br/><br/><br/>';
}
 
/* == Hàm get == */
function cURL ($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
 
?>
 
<meta http-equiv="refresh" content="0">
