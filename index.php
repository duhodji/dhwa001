<!DOCTYPE html>
<html> 

 <head>
  <?php
   $bgs = array("#FFFFFF", "#D9D9D9", "#A6A6A6");
   $bg = rand(0,2);
   $styles = array("white", "gray", "black");
   echo "<link rel=\"stylesheet\" href=\".\\dhstyle_" . $styles[$bg] . ".css\">";
  ?>
 </head>

 <body>

  <h1>Name the app</h1>
  <div class="grid-container">

  <div class="grid-item-text">
   You received this link because I want you to be part of a story. A story that needs a name. <br>
   Picture in your mind an app that lets you measure what would otherwise be unmeasurable. <br>
   An app that uses alternative methods to put a number in things like risk levels, future cashflows, or friends who will come to your party. <br>
   Think of figure, values, quantities, sizes. Think of lateral thinking. <br>
   You don't know exactly how it works, but can you picture it? <br>
   Now give it a name. <br>
   <br>
   In the next page you will be presented with two names. Click on the one that best conveys the app you just imagined. Then you will be asked again, and again, and again, with different   options. <br>
   <br>
   Are you ready? <br>
  </div>

  <div class="grid-item-button">
   <?php
    echo "<a href = \".\\select.php?bg=$bg&iter=0&opt=0\">Continue</a>";
   ?>
  </div>

 </body>

</html>
