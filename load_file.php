<?php
$params = $_REQUEST;

$url = isset($params['url']) && $params['url'] !='' ? $params['url'] : 'none';
//echo $url;

//swap back in & symbol in our passed/formatted url to get
$url = str_replace("zzz","&",$url);

$this_file = file_get_contents($url);
echo $this_file;
?>
