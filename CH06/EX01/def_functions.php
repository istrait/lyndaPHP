<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Defining Functions</title>
  </head>

  <body>
    <?php

    function say_hello() {
      echo "hello world!<br />";
    }

    function say_hello_to($word) {
      echo "hello {$word}!<br />";
    }

    say_hello();
    say_hello_to("me");
    say_hello_to("Bob");
    say_hello_loudly();

    function say_hello_loudly() {
      echo "HELLO WORLD!<br />";
    }

     ?>


  </body>
</html>
