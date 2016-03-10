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

      $randNum = 5 . "<br>";
      $refToNum = &$randNum; // $refToNum references $randNum = 5 and then to 100 on the next line
      echo '$refToNum = ' . $refToNum; // reports $refToNum which is 5, the &$randNum
      $randNum = 100; // $randNum assigned 100
      echo '$refToNum = ' . $refToNum; // reports $refToNum which is 100, the &$randNum

     ?>
  </body>
</html>
