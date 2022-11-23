var numberClass = [];
var nameClassPoap;

const openPoapapLessons = document.getElementById("lesson");
const poapap = document.getElementById("poapap"); 
const poapapLesson = document.getElementById("poapapLessons")
var lessonsContent = document.getElementById("lessonsContent");

var InoutClass = document.querySelectorAll(".InoutClass");
var chemistry = document.querySelector(".chemistry");
var math = document.querySelector(".math");
var it = document.querySelector(".it");
var fisiks = document.querySelector(".fisiks");
var bialogia = document.querySelector(".bialogia");
var closedPoapap = document.getElementById("closedPopapLessons") 
var lessonschemistry = document.querySelector(".lessonschemistry");
var lessonsmath = document.querySelector(".lessonsmath");
var lessonsit = document.querySelector(".lessonsit");
var lessonsfisiks = document.querySelector(".lessonsfisiks");
var lessonsbialogia = document.querySelector(".lessonsbialogia");
var btns = document.querySelectorAll('.test');
var testBD = document.querySelectorAll('.testBD');


if (chemistry) {
  chemistry.addEventListener("click", function() {
    numberClass[1] = "chemistry";
    nameClassPoap = chemistry.className;
    openPoapapLessonsFunktion(nameClassPoap);
    lessonschemistry.classList.add("classOn");
    lessonsmath.classList.remove("classOn");
    lessonsit.classList.remove("classOn");
    lessonsfisiks.classList.remove("classOn");
    lessonsbialogia.classList.remove("classOn");
  });
}
if (math) {
  math.addEventListener("click", function() {
    numberClass[1] = "math";
nameClassPoap = math.className;
openPoapapLessonsFunktion(nameClassPoap);
    lessonschemistry.classList.remove("classOn");
    lessonsmath.classList.add("classOn");
    lessonsit.classList.remove("classOn");
    lessonsfisiks.classList.remove("classOn");
    lessonsbialogia.classList.remove("classOn");
  });
}
  if (it) {
  it.addEventListener("click", function() {
    numberClass[1] = "it";
nameClassPoap = it.className;
openPoapapLessonsFunktion(nameClassPoap);
    lessonschemistry.classList.remove("classOn");
    lessonsmath.classList.remove("classOn");
    lessonsit.classList.add("classOn");
    lessonsfisiks.classList.remove("classOn");
    lessonsbialogia.classList.remove("classOn");
  });
}
  if (fisiks) {
  fisiks.addEventListener("click", function() {
    numberClass[1] = "fisiks";
    nameClassPoap = fisiks.className;
    openPoapapLessonsFunktion(nameClassPoap);
    lessonschemistry.classList.remove("classOn");
    lessonsmath.classList.remove("classOn");
    lessonsit.classList.remove("classOn");
    lessonsfisiks.classList.add("classOn");
    lessonsbialogia.classList.remove("classOn");
  });
}
  if (bialogia) {
  bialogia.addEventListener("click", function() {
    numberClass[1] = "bialogia";
     nameClassPoap = bialogia.className;
     openPoapapLessonsFunktion(nameClassPoap);
    lessonschemistry.classList.remove("classOn");
    lessonsmath.classList.remove("classOn");
    lessonsit.classList.remove("classOn");
    lessonsfisiks.classList.remove("classOn");
    lessonsbialogia.classList.add("classOn");
  });
}
  if (closedPoapap) {
  closedPoapap.onclick  = function(){
    lessonsContent.classList.remove("blur");
    document.body.classList.remove("LokSkrol");
    poapap.classList.remove("_open");
    poapapLesson.classList.remove("chemistryColor");
    poapapLesson.classList.remove("mathColor");
    poapapLesson.classList.remove("itColor");
    poapapLesson.classList.remove("fisiksColor");
    poapapLesson.classList.remove("bialogiaColor");
  }
}
  function openPoapapLessonsFunktion(nameLassons) {
    document.body.classList.add("LokSkrol");
    console.log(nameLassons);
    switch(nameLassons){
        case 'lesson chemistry chemistryColor':
            poapapLesson.classList.add("chemistryColor");
            break;
        case 'lesson math mathColor':
            poapapLesson.classList.add("mathColor");
            break;
        case 'lesson it itColor':
            poapapLesson.classList.add("itColor");
            break;
        case 'lesson fisiks fisiksColor':
            poapapLesson.classList.add("fisiksColor");
            break;   
        case 'lesson bialogia bialogiaColor':
            poapapLesson.classList.add("bialogiaColor");
            break;  
    } 
    lessonsContent.classList.toggle("blur");
    poapap.classList.toggle("_open");
  }
  for(let i = 0; i<btns.length; i++){
    btns[i].addEventListener('click', function(event){
      console.log(event.target);
      testBD[i].classList.toggle("classOn");
    });
  }
  for (let f = 0; f <InoutClass.length; f++) {
    InoutClass[f].addEventListener('click', function(event){
      let eleven   = InoutClass[0];
      let ten = InoutClass[1];
      let nine   = InoutClass[2];
      let eight   = InoutClass[3];
      let seven   = InoutClass[4];
      let six   = InoutClass[5];
      let five   = InoutClass[6];
      let four   = InoutClass[7];
      let three   = InoutClass[8];
      let two   = InoutClass[9];
      let one  = InoutClass[10];
       if (eleven ==  InoutClass[f]) {
        numberClass[2] = 11;
       }
       if (ten ==  InoutClass[f]) {
        numberClass[2] = 10;
       }
       if (nine ==  InoutClass[f]) {
        numberClass[2] = 9;
       }
       if (eight ==  InoutClass[f]) {
        numberClass[2] = 8;
       }
       if (seven ==  InoutClass[f]) {
        numberClass[2] = 7;
       }
       if (six ==  InoutClass[f]) {
        numberClass[2] = 6;
       }
       if (five ==  InoutClass[f]) {
        numberClass[2] = 5;
       }
       if (four ==  InoutClass[f]) {
        numberClass[2] = 4;
       }
       if (three ==  InoutClass[f]) {
        numberClass[2] = 3;
       }
       if (two ==  InoutClass[f]) {
        numberClass[2] = 2;
       }
       if (one ==  InoutClass[f]) {
        numberClass[2] = 1;
       }
       location.href = 'testList.php?x='+numberClass[1]+'&y='+numberClass[2]+'';
      console.log(nameсlass,numberClass);

     
    
     
    });
  }
