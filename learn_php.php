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

      echo ($randNum + 7) . "<br>"; // outputs 12 to the screen
      echo ($randNum - 7) . "<br>"; // outputs -2 to the screen
      echo ($randNum * 7) . "<br>"; // outputs 35 to the screen
      echo ($randNum / 7) . "<br>"; // outputs 0.714285714286 to the screen?
      echo ($randNum % 7) . "<br>"; // outputs 5 (remainder) to the screen

// BROKEN CODE
// in the following examples the $randNum is assigned a new value for each line of collator_get_error_code
// not clear on how to fix this at the moment
      echo ($randNum += 7) . "<br>"; // outputs 12 to the screen
      echo ($randNum -= 7) . "<br>"; // outputs 5 to the screen
      echo ($randNum *= 7) . "<br>"; // outputs 35 to the screen
      echo ($randNum /= 7) . "<br>"; // outputs 5 (needs explanation) to the screen?
      echo ($randNum %= 7) . "<br>"; // outputs 5 (remainder) to the screen

      echo ($randNum %= 7) . "<br>"; // outputs 5 (remainder) to the screen
      echo ($randNum /= 7) . "<br>"; // outputs 0.714285714286 (needs explanation) to the screen?
      echo ($randNum *= 7) . "<br>"; // outputs 5 to the screen
      echo ($randNum -= 7) . "<br>"; // outputs -2 to the screen
      echo ($randNum += 7) . "<br>"; // outputs 5 to the screen

     ?>
  </body>
</html>
