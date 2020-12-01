<!DOCTYPE html>
<html>
 <?php
   $prevbg = $_GET['bg'];
   $iter = $_GET['iter'];
   if (empty($_GET['iter'])){
     $iter = 0;
   } else {
     $iter = $_GET['iter'];
   }
   $opt = $_GET['opt'];
   $options = array("sharpseekentry","sharpentry","sizentry",
                    "numeraria","numerana","numeranto",
                    "numeriana","numerary","measurary",
                    "numerama","oblyq");
   $backgrounds = array("#FFFFFF", "#D9D9D9", "#A6A6A6");
   $background = rand(0,2);
   while (($background == $prevbg)) {
      $background = rand(0,2);
   }
   $mystyle = "background-color:" . $backgrounds[$background];
   echo "<body style = " . $mystyle . ">";
 ?>
 <center>
  <?php
   switch ($iter) {
    case 0:
     echo "You received this link because I want you to be part of a story. A story that needs a name. <br>";
     echo "Picture in your mind an app that lets you measure what would otherwise be unmeasurable. <br>";
     echo "An app that uses alternative methods to put a number in things like <br>";
     echo "risk levels, future cashflows, or number of friends who will come to your party. <br>";
     echo "Think of figure, values, quantities, sizes. Think of lateral thinking. <br>";
     echo "You don't know exactly how it works, but can you picture it?  <br>";
     echo "Now it is time to give it a name. <br>";
     echo "<br>";
     echo "Between the two names suggested below, which one conveys best the app you just imagined? <br>";
     echo "(click on you preferred choice) <br>";
     echo "<br>";
     break;
     case 1:
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo $options[$opt] . " was a good choice.<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "How about between these two? <br>";
      echo "(Click on your preferred choice) <br>";
      echo "<br>";
      break;
     case 2:
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Thank you. This is really helpful. Do you mind doing it again? <br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Between the two names below, which one do you find best for a quantitative app? <br>";
      echo "(Click on your preferred choice) <br>";
      echo "<br>";
     break;
     case 3:
      echo "<br>";
      echo "<br>";
      echo "You got this. Now keep doing it for as long as you are comfortable. <br>";
      echo "I will combine your answers with the answers of other friends to find what name has the most appeal. <br> <br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Now keep doing this for as long as you are comfortable. <br>";
      echo "(Click on your preferred choice) <br>";
      break;
     case 11:
      echo "<br>";
      echo "<br>";
      echo "We think we have enough answers from you. Thank you. <br>";
      echo "But feel free to continue if you want to. <br>";
      echo "When you are done, just close this browser window <br> <br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Which name works best for a quantitative app? <br>";
      echo "(Click on your preferred choice) <br>";
      echo "<br>";
      break;
    default:
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Two names, one app. Which one is best, in your opinion? <br> <br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Which name works best for a quantitative app? <br>";
      echo "(Click on your preferred choice) <br>";
      echo "<br>";
  }
   $iter = $iter + 1;
  ?>
  <?php
   $option1 = rand(0,10);
   $option2 = rand(0,10);
   while ($option2 == $option1) {
      $option2 = rand(0,10);
   }
   echo "<a href = \".\\index.php?bg=$background&iter=$iter&opt=$option1\"> $options[$option1] <a> <br>\n";
   echo "<a href = \".\\index.php?bg=$background&iter=$iter&opt=$option2\"> $options[$option2] <a> <br>\n";
  ?>
 </center>
 </body>
</html>
