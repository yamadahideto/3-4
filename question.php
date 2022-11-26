<link rel="stylesheet" href="style.css">
<?php
  $name = $_POST["userName"];
    // 問題の選択肢を作成
  $ports = array("80","22","20","21");
  $languages = array("PHP","Python","JAVA","HTML");
  $getInfomation = array("join","select","insert","update");
    // 各問題の正解の変数を作成
  $correctPort = $ports["0"];
  $correctLanguage = $languages["3"];
  $correctInfomation = $getInfomation["1"];

?>
<p>お疲れ様です <?php echo $name ?>さん</p>
<form action = "answer.php" method = "POST">
  <h2>①ネットワークのポート番号は何番？</h2>
  <?php
    foreach ($ports as $port) {   ?>
      <input type = "radio" name = "portNum" value = <?php echo $port ?>> <?php echo $port?>
    <?php } ?>

  <h2>②Webページを作成するための言語は？</h2>
  <?php
    foreach ($languages as $language) {   ?>
      <input type = "radio" name = "languageName" value = <?php echo $language ?>> <?php echo $language?>
    <?php } ?>

  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <?php
    foreach ($getInfomation as $getInfo) {   ?>
      <input type = "radio" name = "getInfoName" value = <?php echo $getInfo ?>> <?php echo $getInfo?> 
    <?php } ?>
  <br> <br>

      <!-- 名前と正解の変数を内部的に送信 -->
  <input type = "hidden" name = "userName" value = <?php echo $name ?>>
  <input type = "hidden" name = "correctPort" value = <?php echo $correctPort ?>>
  <input type = "hidden" name = "correctLanguage" value = <?php echo $correctLanguage ?>>
  <input type = "hidden" name = "correctInfomation" value = <?php echo $correctInfomation  ?>>
  <input type = "submit" value = "回答する">
</form>

<!-- http://localhost/LetsEngineer/PHPjob/3-4/index.html -->