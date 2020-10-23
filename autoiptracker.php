<?php
$blue   = "\033[1;34m";
$green  = "\033[1;32m";
$yellow = "\033[1;33m";
$normal = "\033[0m";
system("clear");

echo "\n$green
$green     _______    ______             __            $normal
$green    /  _/ _ \  /_  __/______ _____/ /_____ ____  $normal
$green   _/ // ___/   / / / __/ _ `/ __/  '_/ -_) __/  $normal
$green  /___/_/      /_/ /_/  \_,_/\__/_/\_\\__/_/     $normal";

echo "\n     $blue  Author : Rahat Khan Tusar(RKT)  $normal";
echo "\n     $blue  Github : https://github.com/r3k4t $normal";
echo "\n  $yellow ";
$ip = file_get_contents("ip.txt");
system("curl ipinfo.io/{$ip}");
$ip2 = file_get_contents("ip2.txt");
system("curl ipinfo.io/{$ip2}");
$ip3 = file_get_contents("ip3.txt");
system("curl ipinfo.io/{$ip3}");
$ip4 = file_get_contents("ip4.txt");
system("curl ipinfo.io/{$ip4}");
$ip5 = file_get_contents("ip5.txt");
system("curl ipinfo.io/{$ip5}");
echo $result;
?>

