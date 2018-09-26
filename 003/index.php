<?php
require './vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
    html {
      box-sizing: border-box;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }

    html {
      font-size: 1.5vh;
    }

    body {
      height: 100vh;
      width: 100vw;
      background: #7aa4b8;
      font-family: "Merriweather", serif;
      color: white;
      font-size: 2rem;
    }

    .center {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate3d(-50%, -50%, 0);
              transform: translate3d(-50%, -50%, 0);
    }

    .sig {
      position: fixed;
      bottom: 8px;
      right: 8px;
      text-decoration: none;
      font-size: 12px;
      font-weight: 100;
      font-family: sans-serif;
      color: rgba(255, 255, 255, 0.4);
      letter-spacing: 2px;
    }

    .scolorss {
      background-color: white;
      color: #555;
      padding: 50px;
    }
    .scolorss input {
      width: 100%;
      padding: 10px;
      outline: 0;
      font-size: 1.5vh;
    }

    .colors {
      line-height: 29px;
      background-color: #131313;
      color: green;
      padding: 25px;
    }
    </style>
  </head>
  <body>
    <div class="center">

    <div class="scolorss">
    <form class="" action="/" method="post" autocomplete="off">
      <input type="text" name="hex" value="" placeholder="Enter Base HEX Value">
    </form>

    <div class="colors">
    <?php
    if (isset($_POST['hex'])) {
      require './classes/SColorss.php';

      $scolorss = new SColorss();
      $scolorss->setColor($_POST['hex']);
      $scolorss->generateScheme();
    }
    ?>
    </div>
    </div>
  </div>
  </body>
</html>
