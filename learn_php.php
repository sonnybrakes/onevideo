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


/* data types are automatically assigned to variables
  a. Integers : Whole Numbers
  b. Floats : Decimal Numbers, aka double
  c. String : Strings or characters
  d. Boolean : true or false
  e. Array : Multiple Items
  f. Object : A Object defined by a class
  g. Null : default value assigned to empty variables
  */

     ?>
  </body>
</html>
