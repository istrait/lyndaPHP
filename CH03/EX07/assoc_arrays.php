<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Associative Array</title>
  </head>

  <body>
    <p>Assoc array uses keys instead of indexes</p>
    <?php $assoc = array("first_name" => "Ian", "last_name" => "Strait"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "John" ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php //$assoc[0] = "John" ?>
  </body>
</html>
