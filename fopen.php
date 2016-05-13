<?
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgetc($myfile);
fclose($myfile);
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);