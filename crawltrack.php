Tag to be used if the site is hosted on a different server than Crawltrack (you also need to have the fsockopen and fputs functions activated).
<?php
error_reporting(0);
if(isset($_ENV['REQUEST_URI']))
{
    $crawlturl =urlencode($_ENV['REQUEST_URI']);
}
else
{
    $crawlturl =urlencode($_SERVER['REQUEST_URI']);
}
$crawltagent =urlencode($_SERVER['HTTP_USER_AGENT']);
if(isset($_COOKIE["crawltrackstats3"]))
{
    $crawltcookie = $_COOKIE["crawltrackstats3"];
}
else
{
    $crawltcookie = 'countinstats';
}
$crawltip = urlencode($_SERVER['REMOTE_ADDR']);
$crawltreferer=urlencode(@$_SERVER['HTTP_REFERER']);
$crawltvariablescodees = "url=".$crawlturl."&agent=".$crawltagent."&ip=".$crawltip."&referer=".$crawltreferer."&cookie=".$crawltcookie."&site=3";
$url_crawlt2=parse_url("http://localhost:7777/crawltrack/crawltrack.php");
$crawlthote=$url_crawlt2['host'];
$crawltscript=$url_crawlt2['path'];
$crawltentete = "POST ".$crawltscript." HTTP/1.1\r\n";
$crawltentete .= "Host: ".$crawlthote." \r\n";
$crawltentete .= "User-Agent: CrawlTrack\r\n";
$crawltentete .= "Content-Type: application/x-www-form-urlencoded\r\n";
$crawltentete .= "Content-Length: " . strlen($crawltvariablescodees) . "\r\n";
$crawltentete .= "Connection: close\r\n\r\n";
$crawltentete .= $crawltvariablescodees . "\r\n";
$crawltsocket = fsockopen($url_crawlt2['host'], 80, $errno, $errstr,2);
$crawltreply="";

if($crawltsocket)
{
     fputs($crawltsocket, $crawltentete);
     while (!feof($crawltsocket)) {
        $crawltreply.= fgets($crawltsocket,128);
    }
     fclose($crawltsocket);
}
if(strpos($crawltreply, 'crawltrack'))
{
    $crawltreply2 = explode('crawltrack', $crawltreply);
    $crawltreply3=$crawltreply2[1];
}
else
{
    $crawltreply3=0;
}
if($crawltreply3==1)
{
    $GLOBALS = array();
    $_COOKIES = array();
    $_FILES = array();
    $_ENV = array();
    $_REQUEST = array();
    $_POST = array();
    $_GET = array();
    $_SERVER = array();
    $_SESSION = array();
    @session_destroy();
    @mysql_close();
    @header("Location:http://localhost:7777/crawltrack/html/noacces.htm");
     echo"<head>";
     echo"<META HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:7777/crawltrack/html/noacces.htm'>";
     echo"</head>";
}
?>