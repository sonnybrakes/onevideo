<html>
  <head>
    <title>Information Gathered</title>
  </head>
  <body>
    <?php

      date_default_timezone_set('UTC');
      echo date('h:i:s:u: a, l F jS Y');

  /*  h : 12 hr format
      H : 24 hr format
      i : Minutes
      s : Seconds
      u : Microseconds
      a : Lowercase am or pm
      l : Full text for the date
      F : Full text for the month
      j : Day of the month
      S : Suffix for the day st, nd, rd, etc.
      Y : 4 digit year
      e : UTC 
    * /

     ?>
  </body>
</html>
