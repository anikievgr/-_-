<?php
$Class = '11';
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
      <div class="lessonsContent" id="lessonsContent">
         <div class="lesson chemistry chemistryColor" id = "chemistry">
            <img src="img/chemistry.svg" alt="">
            <p>Химия</p>
         </div>
         <div class="lesson math mathColor" id = "math">
            <img src="img/maths.svg" alt="">
            <p>Математика</p>
         </div>
         <div class="lesson it itColor" id = "it">
            <img src="img/IT.svg" alt="">
            <p>Информатика</p>
         </div>
         <div class="lesson fisiks fisiksColor" id = "fisiks">
            <img src="img/fisiks.svg" alt="">
            <p>Физика</p>
         </div>
         <div class="lesson bialogia bialogiaColor" id = "bialogia">
            <img src="img/biologia.svg" alt="">
            <p>Биалогия</p>
         </div>
         
      </div>
      <div class="poapap" id="poapap">
         <div class="poapap-lessons" id = "poapapLessons">
            <div class="poapap_lessons_img">
               <img  src="img/chemistry.svg" alt="">
               <img  src="img/maths.svg" alt="">
               <img  src="img/IT.svg" alt="">
               <img  src="img/fisiks.svg" alt="">
               <img  src="img/biologia.svg" alt="">
            </div>
            <div class="borderForClass">
               <div class="namePoapapLessons">
                  <p>
                     Химия
                  </p>
                  <p>
                     Математика
                  </p>
                  <p>
                     Информатика
                  </p>
                  <p>
                     Физика
                  </p>
                  <p>
                     Биология
                  </p>
               </div>
               <div class="Lessonsclass">
                  <ul class="lessons-class">
                     <li  class="InoutClass"><a>11 класс</a></li>
                     <li  class="InoutClass"><a >10 класс</a></li>
                     <li  class="InoutClass"><a >9 класс</a></li>
                     <li  class="InoutClass"><a >8 класс</a></li>
                     <li  class="InoutClass"><a >7 класс</a></li>
                     <li class="InoutClass"><a  >6 класс</a></li>
                     <li  class="InoutClass"><a >5 класс</a></li>
                     <li  class="InoutClass"><a >4 класс</a></li>
                     <li  class="InoutClass"><a >3 класс</a></li>
                     <li  class="InoutClass"><a >2 класс</a></li>
                     <li  class="InoutClass"><a >1 класс</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="poapap-bakground" id = "closedPopapLessons"></div>
      </div>
      </div>
      <script src="scripts/lesson.js"></script>
      
   </body>
</html>