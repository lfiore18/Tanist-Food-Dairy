
<?php 
//echo 'Hello ' . htmlspecialchars($_GET["url"]) . '!'; 

$url = $_GET["url"];
$ch = curl_init();

$something = "something else";

curl_setopt($ch, CURLOPT_URL, "http://localhost/index.php?url=${something}");
curl_setopt($ch, CURLOPT_HEADER, 0);

// This is a test of "curl"
// If the url is just "http://localhost", exec curl request to push the url to push the url to "http://localhost/index.php?url=something"
if (!isset($url) || $url == "/index.php") 
{
  require_once "Views/HomeView.php";
} else if ($url == "something") {
  echo "I'm something else entirely!";
} else if ($url == "something else") {
  echo "something!";
}

?>