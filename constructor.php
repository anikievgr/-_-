<?php
 session_start();

$_SESSION['class']= $_POST['Class'];
$_SESSION['them']= $_POST['theme'];
$_SESSION['thime']= $_POST['Time'];
$_SESSION['Number']= $_POST['Number'];
$_SESSION['Lessons']= $_POST['Lessons'];
echo $_SESSION['Lessons'];
?>
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
       <form action="addTest.php" method="post" class="Forms two">
        <?php 
         for ($i=0; $i < $_SESSION['Number']; $i++) { 
            ?>
               <p>Вопрос</p>
         <textarea type="text" name="question№[]"></textarea>
         <p>Ответы на вопрос </p>
         <textarea type="text" name="Answers№[]"></textarea>
         <p>Правильный ответ на вопрос </p>
         <textarea type="text"name= "RightAnswer№[]"></textarea> 
            <?php
         }
        ?>
      <button type="submit">Отправить</button>
       </form>
      <script src="scripts/lesson.js"></script>
      
   </body>
</html>