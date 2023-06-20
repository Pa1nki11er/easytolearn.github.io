function menuToggle() {
	const toggleMenu= document.querySelector(".btntonext");
	toggleMenu.classList.toggle('active');
	
}
function menuToggleno() {
	const toggleMenu= document.querySelector(".btntonext");
	toggleMenu.classList.toggle('inactive');
	
}

function menuToggle1() {
	const toggleMenu= document.querySelector(".btntonext");
	toggleMenu.style.visibility = "visible";
	
}
function menuToggleno0() {
	const toggleMenu= document.querySelector(".btntonext");
	toggleMenu.style.visibility = "hidden";
	
}


function checkwords(){

    console.log("a");
    var translations = [
        word1= "Name",
        word2= "Du",
        word3= "Hallo",
        word4= "Wie",
        word5= "Sein",
        word6= "Sind",
        word7= "Ist",
        word8= "Was"
    ];
    console.log("b");

    var wtc1 = document.getElementById("wtc1");
    var wtc2 = document.getElementById("wtc2");
    var wtc3 = document.getElementById("wtc3");
    var wtc4 = document.getElementById("wtc4");
    var wtc5 = document.getElementById("wtc5");
    var wtc6 = document.getElementById("wtc6");
    var wtc7 = document.getElementById("wtc7");
    var wtc8 = document.getElementById("wtc8");

    var userTranslations = [
        wordstocheck1 = wtc1.value,
        wordstocheck2 = wtc2.value,
        wordstocheck3 = wtc3.value,
        wordstocheck4 = wtc4.value,
        wordstocheck5 = wtc5.value,
        wordstocheck6 = wtc6.value,
        wordstocheck7 = wtc7.value,
        wordstocheck8 = wtc8.value
    ];

        

    
    console.log(userTranslations);
    //var wordstocheck1 = document.getElementsByClassName("wtc9");
    var result = document.getElementById("resulttxt");
    var resultno = document.getElementById("resulttxtno");
    var countcorrect = 0;
    for (i=0;i<8;i++){
        a=userTranslations[i];
        console.log(a);
        b=translations[i];
        console.log(b);
        var userTranslationslow = userTranslations[i].toLowerCase();
        var translationslow = translations[i].toLowerCase();
        
        if (userTranslationslow === translationslow) {
            
            console.log(result);
            result.innerText= "Richtig!";
            resultno.innerText = "";
            console.log(countcorrect);
            countcorrect++;
            
        }
        else{
            console.log("no");
            result.innerText = "";
            resultno.innerText= "Falsch! Versuchen Sie das Wort " + userTranslations[i] + " zu koriggieren";
            countcorrect--;
            hilfe1();
            break;
            
        }
    }
    if (countcorrect ==8) {
        menuToggle1();
        console.log("a")
    }
    else{
    menuToggleno0();
    console.log("falsch");
    }
}

function hilfe1(){
    const toggleMenu =document.querySelector(".hilfe");
    toggleMenu.style.visibility = "visible";
}

function hilfe(){
    const toggleMenu= document.querySelector(".hilfetext");
    if (toggleMenu.style.visibility === "visible") {
        toggleMenu.style.visibility = "hidden";
    }
    else{
        toggleMenu.style.visibility = "visible";
    }
    
	
}