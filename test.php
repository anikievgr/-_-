<?php
 session_start();
$themes = $_SESSION['NAMELESSON'];
$ClassLessons = $_SESSION['CLASS'];
$teatLIST[] = $_SESSION['testL'];
$connect = mysqli_connect('localhost','root','root','test');
if(!$connect){
   echo 'erore';
}
$check;
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parts = parse_url($url); 
parse_str($parts['query'], $query); 
$THEME =  $query['x'];
   $test = mysqli_query($connect,"SELECT * FROM `test` WHERE them = '$THEME' AND class = '$ClassLessons';");
   $test = mysqli_fetch_all($test);

   foreach( $test as  $test){
   $Lessons = $test[2];
   $thime =   $test[4];
   $check++;

   $Questions[] = $test[5];
   $answers[] = $test[6];
   $answer[] = $test[7];
   }
   $_SESSION['$CHECK'] = $check;
   // echo '<pre>';
   // var_dump($ClassLessons);
   // echo '</pre>';
   // echo '<pre>';
   // var_dump($answers);
   // echo '</pre>';
   // echo '<pre>';
   // var_dump($answer);
   // echo '</pre>';as
   $_SESSION['ANSWER'] = $answer;
   //$Lessons = trim($Lessons);
   $lodoLessons;
   $color;
   switch ($Lessons){
      case 'math':
         $lodoLessons = 'maths';
         $color = 'math';
         break;
         case 'chemistry':
            $color = 'chemistry';
            $lodoLessons = 'chemistry';
            break;
            case 'it':
               $color = 'it';
               $lodoLessons = 'IT';
               break;
               case 'fisiks':
                  $color = 'fisiks';
                  $lodoLessons = 'fisiks';
                  break;
                  case 'bialogia':
                     $color = 'bialogia';
                     $lodoLessons = 'biologia';
                     break;
                     // default:
                     // $f = trim($Lessons);
                     //    $lodoLessons =  $f ;
                     //    break;
          
   }
   
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<body>
<?php
?>
<div class="headerTest <?=$color?>Color">
<div class="logoLesson">
   <img src="img/<?=$lodoLessons?>.svg" alt="">
   <div class="theme"><?=$THEME?></div>
   <div class="thime">
      <div class="minuts" id ="minuts"></div>
         <p>:</p>
         <div class="seconds" id="seconds"></div>
    
   </div>

  
</div>
</div>

<?php
?>
<form action="checkAnswers.php" class="form testList" id="form" method="post">
<ul class="testListLI">
<?php
 for ($i=0; $i < $check; $i++) { 
  ?>
 <li>
   <label for="question" class="questionTest"><p><?=$Questions[$i]?></p></label>
   <label for="answers" class="answersTest"><p><?=$answers[$i]?></p></label>
   <textarea name="answer[]" class="answerTest" rows="3"></textarea>
  </li>
  <?php
 }
?>
</ul>
<button type="submit" class="button">Отправить</button>
</form>
<script>
  let seconds = 0;
   let minuts = <?=$thime?>;

   document.getElementById("seconds").innerHTML = seconds;
   document.getElementById("minuts").innerHTML = <?=$thime?>;
setInterval(function(){
   if(minuts == 0 && seconds == 0){
      document.getElementById("form").submit();
   }else if (seconds == 0) {
      minuts--;
     seconds = 60;
 
   }
   document.getElementById("minuts").innerHTML = minuts;
   document.getElementById("seconds").innerHTML = seconds;
   seconds--;
}, 1000);
   

</script>
<script src="scripts/allButton.js"></script>
</body>
</html>