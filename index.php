<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo4</title>
  </head>
  <body>
    <p>
   <?php
   $count = 1;
   while ($count < 10) {
     echo ($count += $count/2);
   }
   ?>
 </p>
  </body>
</html>
