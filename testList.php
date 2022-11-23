<?php
 session_start();
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parts = parse_url($url); 
parse_str($parts['query'], $query); 
$Lessons =  $query['x'];

$ClassLessons =  $query['y'];
$connect = mysqli_connect('localhost','root','root','test');
if(!$connect){
   echo 'erore';
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
<? include("header.php"); ?>
<div class="contentTheme">
  <div class="chemistryTest">
  <ul class = "test-Spisoc">
    <?php
    $checkNumberNemaeLessons = array();
    function translation($NAMELESSON = [], $CLASS,$TESTLIST, $TIME = [],$summ,$check){
      $_SESSION['NAMELESSON'] = $NAMELESSON;
      $_SESSION['CLASS'] = $CLASS;
            
         for ($i=0; $i <$summ; $i++) { 
          if ($NAMELESSON[$i] != $check){
            ?>
            <li class="test">
            <a href="test.php?x=<?=$NAMELESSON[$i]?>" class="themt"><?=$NAMELESSON[$i]?><p><?=$TIME[$i]?> мин</p></a>
            </li>
            <?php
            $check = $NAMELESSON[$i];
          }
       
         }
        
     }
       $testchemistry = mysqli_query($connect,"SELECT * FROM `test`");
       $testchemistry = mysqli_fetch_all($testchemistry);
          $test = mysqli_query($connect,"SELECT * FROM `test` WHERE  lesson = '$Lessons' AND class = '$ClassLessons' ;");
          $test = mysqli_fetch_all($test);
          foreach($test as $test){
            $checkNumberNemaeLessons[] = $test[3];
            $time[] = $test[4];
            $summ++;
          }
          translation($checkNumberNemaeLessons,$ClassLessons,$test,$time,$summ, 2);
       

       
    
    ?>
  </div>
</div>
<script>
let params =  (new URL(document.location)).searchParams;
let nameClass = params.get("x");
let numberClass = params.get('y');
var chemistryTest = document.querySelector(".chemistryTest");
console.log(nameClass,numberClass);

</script>
<script src="scripts/allButton.js"></script>
</body>
</html>