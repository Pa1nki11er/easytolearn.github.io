function checkwords() {
    if (document.getElementById('inpt').length > 21 )
     {
        var g = document.getElementById('inpt').length;
        console.log(g);
    }
}
var complete = false;

var les1 = 'What is your name ';
var les1_1 = 'What do you do '

var les1_2= 'My name is Jack ';

function menuToggle() {
	const toggleMenu= document.querySelector(".btntonext");
	toggleMenu.classList.toggle('active');
	
}

//firsr lesson
function checksentenceles1(){
    var par = document.getElementById('inpt').innerHTML ;
    var cong = document.getElementById('cong');
    console.log(document.getElementById('inpt').innerHTML);
    if (par == les1 ) {
        cong.style.color = "lime";
        cong.innerHTML = 'Richtig!';
        console.log(typeof par);
        console.log(par);
        complete = true;
        
        menuToggle();
        
    }
    else{
        cong.style.color = "red";
        cong.innerHTML = 'Versuch es nochmal!';
        console.log(document.getElementById('inpt'));
        console.log(typeof par);
        console.log(par);
        hilfe();
        setTimeout(removewords, 1000);
        
    }
}
function setword() {
    const buttons = document.querySelectorAll('.wordinbox');
    //console.log(buttons);
    //console.log(buttons[0].outerText);
    //const findedword = buttons[0].outerText;
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(event) {
          console.log("Нажата кнопка с текстом: " + event.target.textContent);
        });
      }
    //var elements = buttons.getElementByTagName('p');
    //console.log(elements);
    //buttons.forEach(elements => )
    var par = document.getElementById('inpt');
    //var word = document.getElementById('what');
    //var word = this.innerHTML;
    par.innerHTML += event.target.textContent;
    return 0;
}


//lesson 1.1
function checksentenceles1_1(){
    var par = document.getElementById('inpt').innerHTML ;
    var cong = document.getElementById('cong');
    if (par == les1_1 ) {
        cong.style.color = "lime";
        cong.innerHTML = 'Richtig!';
        complete = true;
        menuToggle();
    }
    else{
        cong.style.color = "red";
        cong.innerHTML = 'Versuch es nochmal!';
        hilfe();
        setTimeout(removewords, 1000);
    }
}

//lesson1.2
function checksentenceles1_2(){
    var par = document.getElementById('inpt').innerHTML ;
    var cong = document.getElementById('cong');
    if (par == les1_2 ) {
        cong.style.color = "lime";
        cong.innerHTML = 'Richtig!';
        complete = true;
        menuToggle();
    }
    else{
        cong.style.color = "red";
        cong.innerHTML = 'Versuch es nochmal!';
        hilfe();
        setTimeout(removewords, 1000);
    }
}

//second lesson
function checksentenceles2(){
    var par = document.getElementById('inpt').innerHTML ;
    var cong = document.getElementById('cong');
    console.log(document.getElementById('inpt').innerHTML);
    if (par == les2 ) {
        cong.style.color = "lime";
        cong.innerHTML = 'Richtig!';
        console.log(typeof par);
        console.log(par);
        complete = true;
        menuToggle();
        
    }
    else{
        cong.style.color = "red";
        cong.innerHTML = 'Versuch es nochmal!';
        console.log(document.getElementById('inpt'));
        console.log(typeof par);
        console.log(par);
        setTimeout(removewords, 1000);
        
    }
}

function removewords(){
    //checkwords();
    var cong = document.getElementById('cong');
    var par = document.getElementById('inpt');
    par.innerHTML = '';
    return 0;
}
function gotousermenu(){
    window.location.href = '../../Usermain.php'
}

function hilfe(){
    const toggleMenu =document.querySelector(".hilfe");
    toggleMenu.style.visibility = "visible";
   /* var element = document.getElementById("hilfeimage");
    var isDragging = false;
    var mouseOffset = { x: 0, y: 0 };

// Обработчик события нажатия кнопки мыши
    toggleMenu.addEventListener("mousedown", function(event) {
     isDragging = true;

  // Определение смещения мыши относительно объекта
     mouseOffset.x = event.clientX - element.offsetLeft;
     mouseOffset.y = event.clientY - element.offsetTop;
    });

// Обработчик события перемещения мыши
    document.addEventListener("mousemove", function(event) {
    if (isDragging) {
    // Вычисление новых координат объекта
        var posX = event.clientX - mouseOffset.x;
        var posY = event.clientY - mouseOffset.y;

    // Установка новых координат объекта
        element.style.left = posX + "px";
        element.style.top = posY + "px";
  }
});

// Обработчик события отпускания кнопки мыши
document.addEventListener("mouseup", function() {
  isDragging = false;
});*/
}


function hilfe1(){
    const toggleMenu= document.querySelector(".hilfeimage");
    if (toggleMenu.style.visibility === "visible") {
        toggleMenu.style.visibility = "hidden";
    }
    else{
        toggleMenu.style.visibility = "visible";
    }
}






//21 sumbol