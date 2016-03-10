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
      echo ($randNum -= 7) . "<br>"; // outputs -2 to the screen
      echo ($randNum -= 7) . "<br>"; // outputs -9 to the screen
      echo ($randNum -= 7) . "<br>"; // outputs -16 to the screen
      echo ($randNum -= 7) . "<br>"; // outputs -23 to the screen
      // 5 - 7 = -2; -2 - 7 = -9; -9 - 7 = -16; -6 - 7 = -23
     ?>
  </body>
</html>
