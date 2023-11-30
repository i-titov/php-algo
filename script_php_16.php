<?php
$homepage = file_get_contents('./files/page.html');
$page = fopen('./files/page.csv', 'w');
$pattern ="#(https?://[\w./?&%:;=-]+)#is";
$links = [];
preg_match_all($pattern, $homepage,$links);
$line = "";
foreach ($links as $item){
    fputcsv($page, $item);
}
fclose($page);


