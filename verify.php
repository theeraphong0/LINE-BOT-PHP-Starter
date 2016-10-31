<?php
$access_token = 'SgjtlvJKxAdADj4wUhz8Hrj1ByzX9eJix2eScAuBWeE7QaNAqjdnL2n4NtUp/JrYss/4+mWdC1EGrJiWuNW1zTMhEPgSQStkceEcnfASjGTxzMI0UBPakvgyV75Q5K3Kmg1p1hHNM7MtzuaHcmIbAQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
