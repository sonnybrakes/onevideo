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

      // incrementing counter
      $randNum = 5;
      echo "++randNum = " . ++$randNum . "<br>";
      echo "randNum++ = " . $randNum++ . "<br>";
      echo $randNum;
      // this need further attention for me to understand

     ?>
  </body>
</html>
