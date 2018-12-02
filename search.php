<?php
// script.php
error_reporting(0);

$searchfor = htmlspecialchars($_GET['keyword']);

$file = 'ipout.txt';

$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";

if(preg_match_all($pattern, $contents, $matches)){
   echo "Results:<br />";
   echo implode("<br />", $matches[0]);
}
else{
   echo "Not hosted by Cloudflare or not reachable.";
fclose ($file); 
}
?>
