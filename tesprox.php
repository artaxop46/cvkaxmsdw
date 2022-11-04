<?php
$cookie = "cookie.txt";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.ipify.org?format=json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_PROXY, "sea.socks.ipvanish.com:1080");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "nM7tgpoXqjS:YgALpULwckZ");
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority' => 'login.yahoo.com',
    'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'accept-language' => 'en-US,en;q=0.9',
    'cache-control' => 'max-age=0',
    'dnt' => '1',
    'sec-ch-ua' => '"Microsoft Edge";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
    'sec-ch-ua-mobile' => '?0',
    'sec-ch-ua-platform' => '"Windows"',
    'sec-fetch-dest' => 'document',
    'sec-fetch-mode' => 'navigate',
    'sec-fetch-site' => 'none',
    'sec-fetch-user' => '?1',
    'upgrade-insecure-requests' => '1',
    'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.26',
    'Accept-Encoding' => 'gzip',
]);
$response = curl_exec($ch);

curl_close($ch);
print_r($response);
