<?

$r="";
for($f=1; $f<count($argv); $f++){
  $r.=$argv[$f]." ";
}
$r=substr($r,0,-2);

$re=sha1($r);

if(!file_exists("./records/".$re.".wav")){
  print "pasa";
  system("perl ./googletts-cli.pl -r 8000 -o ./records/".$re.".wav -l es -t \"".$r."\"");
}
print $re.".wav";

?>
