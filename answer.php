<?php
$userName = $_POST["userName"];
$correctPort = $_POST["correctPort"];
$correctLanguage = $_POST["correctLanguage"];
$correctInfomation = $_POST["correctInfomation"];

$portNum = $_POST["portNum"];
$langageName = $_POST["languageName"];
$getInfomation = $_POST["getInfoName"];
?>

<h3> <?php echo $userName ?>さんの結果は...? </h3>

<h4> ①の答え </h4>
<?php
if ($correctPort == $portNum) {
  echo "正解!";
}else {
  echo "残念...";
}
?>

<h4> ②の答え </h4>
<?php
if ($correctLanguage == $langageName) {
  echo "正解!";
} else {
  echo "残念...";
}
?>

<h4> ③の答え </h4>
<?php
if ($correctInfomation == $getInfomation) {
  echo "正解!";
} else {
  echo "残念...";
}
?>