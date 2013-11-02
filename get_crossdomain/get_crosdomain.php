<?php

//include "http_chunked_deco.php";

$fp = fsockopen('asdf.elbruto.es', 80);

$vars = array(
    'hello' => 'world'
);
$content = http_build_query($vars);

fwrite($fp, "GET / HTTP/1.1\r\n");
fwrite($fp, "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.2) Gecko/20100115 Firefox/3.6\r\n");
fwrite($fp, "Accept-Encoding: gzip\r\n");
fwrite($fp, "Accept-language: en,es,fr\r\n");
fwrite($fp, "Host: asdf.elbruto.es\r\n");
fwrite($fp, "Connection: close\r\n");
fwrite($fp, "\r\n");

fwrite($fp, $content);

header('Content-type: text/html');
$response='';
while (!feof($fp)) {
    $response .=http_chunked_decode(fgets($fp, 1024)) ;
}



?>