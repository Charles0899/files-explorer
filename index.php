<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>

  <?php
  $url = getcwd();
  echo $url."<br>";
  $start = "start";
  if (!isset($_POST['cwd'])) {
  $url = getcwd() . DIRECTORY_SEPARATOR . $start;
  }else {
  $url = $_POST['cwd'];
  }
  echo "<form method='POST'>";
  $content = scandir($url);
  foreach ($content as $item) {
  if($item !== "." && $item !== ".."){
  echo "<br>" . "<button type='submit' name='cwd' value='". $url . DIRECTORY_SEPARATOR . $item . "'>" . $item ."</button>";
  }
}
?>

</body>
</html>
