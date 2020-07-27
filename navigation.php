<?php
$url = getcwd();
echo $url;
$start = "start";
if (!isset($_POST['cwd'])) {
  $url = getcwd() . DIRECTORY_SEPARATOR . $start;
}else {
  $url = $_POST['cwd'];
}
echo "<form method='POST'>";
  $content = scandir($url);
  foreach ($content as $item) {
    if($item !== "."){
     echo "<br>" . "<button type='submit' name='cwd' value='". $url . DIRECTORY_SEPARATOR . $item ."'>" . $item . "</button>";
 }
}
echo "</form>";

 ?>
