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

      echo $str;

      echo "<br> 5 + 2 = " . (5 + 2); // addition
      echo "<br> 5 - 2 = " . (5 - 2); // subtraction
      echo "<br> 5 * 2 = " . (5 * 2); // multiplication
      echo "<br> 5 / 2 = " . (5 / 2); // division, returns a float/double
      echo "<br> 5 % 2 = " . (5 % 2) . "<br>"; // modulus operator returns the remainder from division
     ?>
  </body>
</html>
