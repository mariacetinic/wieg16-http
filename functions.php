<?php
// "HTTP/1.0 404 Not Found"
function status_header($code = 200) {
    $messages = [
        200 => "OK",
        404 => "Not found"
    ];
    header("HTTP/1.1 ".$code." ".$messages[$code]);
}
echo status_header(); //standard är 200

// [header => värde]



function headers(array $headers = []){
    //header ("connection: keep alive");
    foreach ($headers as $header => $value) {
        echo "Status: $value <br>";
    }
}

headers([
    "Connection" => "keep-alive",
    "Waiting" => "keep-waiting"
]);

function redirect($url, $code = 302) {}