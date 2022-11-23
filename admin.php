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
       <form action="constructor.php" method="post" class="Forms">
       <p>Количесво вопросов</p>
         <input type="text" name = "Number">
         <p>Класс</p>
         <input type="text" name="Class">
         <p>Предмет</p>
         <input type="text" name="Lessons">
         <p>Тема</p>
         <input type="text" name="theme">
         <p>Время на тест</p>
         <input type="text" name="Time">
         <button type="submit" class="button">отправить</button>
       </form>
      <script src="scripts/lesson.js"></script>
      
   </body>
</html>