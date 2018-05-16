<?php


// 設定 
$secret_key ="security2018";
$header = getallheaders();
$hmac = hash_hmac('sha1', $HTTP_RAW_POST_DATA, $secret_key);
if ( isset($header['X-Hub-Signature']) && $header['X-Hub-Signature'] === 'sha1='.$hmac ) {
    //$payload = json_decode($HTTP_RAW_POST_DATA, true);  // 受け取ったJSONデータ
    // ここに実行したいコードを書く(testレポに移動して、git pullする)
    exec('git pull');
    echo "OK";
} else {
  echo "error";
}


?>
