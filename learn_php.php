<html>
  <head>
    <title>Information Gathered</title>
  </head>
  <body>
    <?php

      $usersName = $_POST['username'];
      $streetAddress = $_POST['streetaddress'];
      $cityAddress = $_POST['cityaddress'];

      echo $usersName . "<br>";
      echo $streetAddress . "<br>";
      echo $cityAddress . "<br>";

      $str = <<<EOD
      The customers name is
      $usersName and they
      live at $streetAddress
      in $cityAddress</br>
EOD;

      $randNum = 5;
      echo ($randNum *= 7) . "<br>"; // outputs 35 to the screen
      echo ($randNum *= 7) . "<br>"; // outputs 245 to the screen
      // 5 * 7 = 32; 35 * 7 = 245
     ?>
  </body>
</html>
