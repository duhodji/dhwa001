<!DOCTYPE html>
<html>

 <head>
  <?php
   if (empty($_GET['bg'])){
    $prevbg = 0;
   } else {
    $prevbg = $_GET['bg'];
   }  
   $iter = $_GET['iter'];
   if (empty($_GET['iter'])){
     $iter = 0;
   } else {
     $iter = $_GET['iter'];
   }
   if (empty($_GET['opt'])){
    $opt = 0;
   } else {
    $opt = $_GET['opt'];
   }
   $bgs = array("#FFFFFF", "#D9D9D9", "#A6A6A6");
   $bg = rand(0,2);
   while (($bg == $prevbg)) {
    $bg = rand(0,2);
   }
   $options = array("sharpseekentry","sharpentry","sizentry",
                    "numeraria","numerana","numeranto",
                    "numeriana","numerary","measurary",
                    "numerama","oblyq");
   $option1 = rand(0, 10);
   $option2 = rand(0, 10);
   while ($option2 == $option1){
    $option2 = rand(0,10);
   }
   $progress = min(max($iter * 5, 0), 100);
   $styles = array("white", "gray", "black");
   echo "<link rel=\"stylesheet\" href=\".\\dhstyle_" . $styles[$bg] . ".css\">";
  ?>
 </head>

 <body>

  <h1>Name the app</h1>

  <div class = "grid-container">
  
   <div class = "grid-item-text">
    <?php
     switch($iter) {
      case 0:
       echo "Between the two names suggested below, which one conveys best the app you just imagined? <br>";
       echo "<br>\n";
       break;
      case 1:
       echo $options[$opt] . " was a good choice. How about between these two? <br>";
       echo "<br>\n";
       break;
      case 2:
       echo "Thank you. This is really helpful. Keep doing this for as long as you find comfortable. <br>";
       echo "<br>\n";
       break;
      case 20:
       echo "I think I have enough answers from you. Thank you. But feel free to continue if you want. <br>";
       echo "<br>\n";
       break;
      default:
       echo "You are doing great. Keep going. <br>Which of these two names works best for a quantitative app, in your opinion? <br>";
       echo "<br>\n";
     }
     $iter = $iter + 1;
    ?>
   </div>
   <div class = "grid-item-button">
    <?php
     echo "<a href = \".\\select.php?bg=$bg&iter=$iter&opt=$option1\"> $options[$option1] </a> <br>\n";
    ?>
   </div>
   <div class = "grid-item-button">
    <?php
     echo "<a href = \".\\select.php?bg=$bg&iter=$iter&opt=$option2\"> $options[$option2] </a> <br>\n";
    ?>
   </div>
   <div class = "grid-item-text">
    <?php
     if ($iter < 22) {
      echo "Progres: " . ($iter-1) . "/20";
     } else {
      echo "Progress: 20/20 + " . ($iter - 21);
     }
    ?>
    <div class="meter">
     <?php
      echo "<span style=\"width: " . $progress . "%\"></span>";
     ?>
    </div>
   </div>
  </div>
 </body>
<html>