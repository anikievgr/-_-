<?php
session_start();
$connect = mysqli_connect('localhost','root','root','test');
if(!$connect){
   echo 'erore';
}
$class = $_SESSION['class'];
$them = $_SESSION['them'];
$lesson=  $_SESSION['Lessons'];
$thime = $_SESSION['thime'];
$Number = $_SESSION['Number'];
$question = $_POST['question№'];
$answerOptions = $_POST['Answers№'];
$rightAnswer = $_POST['RightAnswer№'];
echo $them;
switch ($lesson){
   case 'Математика':
     $lesson = 'math';
      break;
      case 'Химия':
         $lesson = 'chemistry';
         break;
         case 'Информатика':
            $lesson = 'it';
            break;
            case 'Физика':
               $lesson = 'fisiks';
               break;
               case 'Биалогия':
                  $lesson = 'bialogia';
                  break;
}
$test = [];
echo $class,$lesson,$them,$thime;
 echo $question[1];
 for ($i=0; $i <$Number ; $i++) { 
   mysqli_query($connect,"INSERT INTO `test` (`id`, `class`, `lesson`, `them`, `thime`, `question№1`, `answerOptions№1`, `rightAnswer№1`) VALUES
 (NULL, '$class', '$lesson ', '$them ', '$thime', ' $question[$i]', '$answerOptions[$i]', '$rightAnswer[$i]');");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Hallo</p>
<pre>
   <?php
   var_dump($test);
   ?>
</pre>
</body>
</html>