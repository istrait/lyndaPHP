<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Constants</title>
  </head>

  <body>
    <?php
      $max_width = 980;
      define("MAX_WIDTH", 980);// to define apc_define_constants
      echo MAX_WIDTH;
      ?>
      <br />
      <?php //can't change the value
      // MAX_WIDTH +=1;
      //echo MAX_WIDTH;
     ?>
     <?php //cant even redefine
     //define("MAX_WIDTH", 280);// to define apc_define_constants
     // echo MAX_WIDTH;
     ?>    

  </body>
</html>
