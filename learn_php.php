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
      $randNum = 5 . "<br>";
      echo $randNum; // $randNum = 5
      // echo "++randNum = " . ++$randNum . "<br>"; // this line adds 1 to the $randNum and the reports 6
      echo "randNum++ = " . $randNum++ . "<br>"; // this line reports 5 because 1 has not yet been added
      echo $randNum; // $randNum = 5
      // this need further attention for me to understand

     ?>
  </body>
</html>
