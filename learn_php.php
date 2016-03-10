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
      echo ($randNum += 7) . "<br>"; // outputs 12 to the screen
      echo ($randNum += 7) . "<br>"; // outputs 19 to the screen
      echo ($randNum += 7) . "<br>"; // outputs 26 to the screen
      echo ($randNum += 7) . "<br>"; // outputs 33 to the screen
      // 7 + 5 = 12; 12 + 7 = 19; 19 + 7 = 26; 26 + 7 = 33
     ?>
  </body>
</html>
