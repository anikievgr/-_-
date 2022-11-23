
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
