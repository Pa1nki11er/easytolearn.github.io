
var createCardButton = document.getElementById("createCardButton"); 
if (createCardButton) {
    createCardButton.addEventListener("click", createCard);
    console.log("1");
} 

var xcard;
var ycard;
var margintop = 0;
var marginleft = 120;
var countcards=0;
var cardsset = localStorage.getItem('countcards');

var getwordfront = localStorage.getItem('wordfromInputFront');
var getwordback = localStorage.getItem('wordfromInputBack');
console.log(cardsset);
if (cardsset) {
  for (var i = 0 ; i<cardsset ; i++){
    createCard();
  }
}
if (getwordfront) {
  var inputFront = document.querySelector('#wordfront');
  inputFront.value = getwordfront;
}
if (getwordback) {
  var inputFront = document.querySelector('#wordback');
  inputFront.value = getwordback;
}

function saveCards() {
localStorage.setItem('countcards', countcards);
  //var inputFront = document.querySelector('#wordfront');
  //var inputBack = document.querySelector('#wordback');
  //get word from from of card
    //var inputValueFront = inputFront.value;
    //localStorage.setItem('wordfromInputFront', inputValueFront);
//get word from back of card
   // var inputValueBack = inputBack.value;
    //localStorage.setItem('wordfromInputBack', inputValueBack);
  var inputFields = document.querySelectorAll('input'); // получаем все инпуты на странице

// перебираем все инпуты и сохраняем значение каждого в локальное хранилище
inputFields.forEach(function(inputField, index) {
  var inputValue = inputField.value; // получаем значение инпута
  var key = 'inputValue_' + index; // создаем уникальный ключ для сохранения значения

  localStorage.setItem(key, inputValue); // сохраняем значение в локальное хранилище
});
}

function createCard() {
    var label = document.createElement("label");
    label.classList.add("label");
    var input = document.createElement("input"); 
    input.setAttribute("type", "checkbox");
    input.classList.add("boxin");                          // устанавливаем атрибут type для input
    var card = document.createElement("div"); // создаем новый элемент div для карточки
    card.classList.add("card"); // добавляем карточке класс "card"
    var front = document.createElement("div"); // создаем новый элемент div для передней стороны карточки
    front.classList.add("front"); // добавляем передней стороне карточки класс "front"
    var inputfront = document.createElement("input");
    inputfront.setAttribute("name", "inputfront[]");
    inputfront.classList.add("wordfront");
    inputfront.setAttribute("id", "wordfront");// добавляем текст на переднюю сторону карточки
    var back = document.createElement("div"); // создаем новый элемент div для задней стороны карточки
    back.classList.add("back"); // добавляем задней стороне карточки класс "back"
    var inputback = document.createElement("input");
    inputback.setAttribute("name", "inputback[]");
    inputback.classList.add("wordback");
    inputback.setAttribute("id", "wordback"); // добавляем текст на заднюю сторону карточки
    card.appendChild(front); // добавляем переднюю сторону карточки внутрь элемента card
    card.appendChild(back); // добавляем заднюю сторону карточки внутрь элемента card
    label.appendChild(input); // добавляем элемент input внутрь элемента label
    label.appendChild(card);
    front.appendChild(inputfront);
    back.appendChild(inputback);
    countcards++;
    
    var x =  window.innerWidth; 
    var y = window.innerHeight; 
    var cardWidth = card.offsetWidth; 
    var cardHeight = card.offsetHeight;
    var cardTop = card.offsetTop;
    var cardLeft = card.offsetLeft;
    
  // Проверяем, выходит ли элемент за правый край окна
  
  var createCardButton = document.getElementById("createCardButton"); 
  margintop += cardHeight + 120;
  
  
  //if (x + cardWidth > window.innerWidth) {
    //xcard =  cardWidth - window.innerWidth + 115;
     
 // }
  
  if (margintop > window.innerHeight) {
    margintop=120;
    label.style.marginTop = margintop + "px";
    marginleft += cardWidth + 250;
     
  }
  
  label.style.marginTop = margintop + "px";
  label.style.marginLeft = marginleft + "px";
  label.style.position = "absolute"; // устанавливаем позиционирование элемента
  
  
  document.body.appendChild(label); 
  console.log(countcards);
  console.log(marginleft,margintop);
    // добавляем карточку на страницу  
}



  
  
  
  
  