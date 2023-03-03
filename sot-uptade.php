<?php

$xml = new DOMDocument();
$xml->load('https://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=1172620&count=1&maxlength=30000000000000&format=xml');
// api adresimizi veriyoruz appid için https://steamdb.info/apps/ adresini kullanabilirsiniz. maxlength ise çekilen içeriğin kaç karakterlik olacağıdır xml de dönen veri tipi.

$baslik = $xml->getElementsByTagName('title');  
$icerik = $xml->getElementsByTagName('contents');

$html = "<ul>";

foreach ($baslik as $bas) {
    $html .= "<li>" . $bas->nodeValue . "</li>";

    foreach ($icerik as $icer) {
        $html .= "<li>" . $icer->nodeValue . "</li>";
    }
}


$html .= "</li>";



$newstr = strstr($icer->nodeValue, " Download Size:"); 
//icerikten gelen verinin ayrıştırılması

echo $newstr;
echo $html;

?>
