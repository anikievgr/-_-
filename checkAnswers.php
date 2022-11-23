<?php
 session_start();
 $answers = $_SESSION['ANSWER'];
 $answer= $_POST['answer'];
 $check =   $_SESSION['$CHECK'];
//  echo  $check;
//  echo '<pre>';
//  var_dump($answer);
//  echo '</pre>';
//  echo '<pre>';
//  var_dump($answers);
//  echo '</pre>';
 $errore;
 for ($i=0; $i <$check; $i++) { 
   if ( $answer[$i] == $answers[$i]) {
    $errore++;
   }
 }
 $errore = ($errore /$check)* 100;
 //echo  $errore. '%';
 if ($errore >= 90 &&  $errore<=100) {
    $bacground = 'chemistry';
    $estimation = 5;
}
if ($errore >= 75 &&  $errore<=89) {
    $bacground = 'bialogia';
    $estimation = 4;
}
if ($errore >= 50 &&  $errore<=74) {
    $bacground = 'fisiks';
    $estimation = 3;
}
if ($errore < 50) {
    $bacground = 'math';
    $estimation = 2;
}
//echo   $errore. '%';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="ansersBlok">
        <div class="loader">
            <div class="progress"></div>
        </div>
    <div class="answers" id="answers"></div>
    </div>
    <script>
       let preloader = document.querySelector(".progress");

             let ansewrsAnimation = 0;
          document.getElementById("answers").innerHTML = ansewrsAnimation;
        let answers = <?=$errore?>;
        const interval = setInterval(() => {
            if (ansewrsAnimation == answers) {
                clearInterval(interval);
            }
            preloader.style.width = ansewrsAnimation + "%" ;
            document.getElementById("answers").innerHTML = ansewrsAnimation +"%";
            ansewrsAnimation++;
}, 20)
        document.getElementById("answers").innerHTML = answers;
    </script>
</body>
</html>