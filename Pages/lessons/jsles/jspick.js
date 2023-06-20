
var englischword = document.getElementById("englisch-word");
var englischword1 = document.getElementById("englisch-word1");
var englischword2 = document.getElementById("englisch-word2");

var germanword = document.getElementById("german-word");
var germanword1 = document.getElementById("german-word1");
var germanword2 = document.getElementById("german-word2");

var pickedwordger ="";
var pickedwordeng="";


//german words
germanword.addEventListener('click', e => {
    console.log('click');
    pickedwordger=germanword.innerText;
    console.log(pickedwordger);
} )

germanword1.addEventListener('click', e => {
    console.log('click');
    pickedwordger=germanword1.innerText;
    console.log(pickedwordger);
} )
germanword2.addEventListener('click', e => {
    console.log('click');
    pickedwordger=germanword2.innerText;
    console.log(pickedwordger);
} )


//english words

englischword.addEventListener('click', e => {
    console.log('click');
    pickedwordeng=englischword.innerText;
    console.log(pickedwordeng);
} )
englischword1.addEventListener('click', e => {
    console.log('click');
    pickedwordeng=englischword1.innerText;
    console.log(pickedwordeng);
} )
englischword2.addEventListener('click', e => {
    console.log('click');
    pickedwordeng=englischword2.innerText;
    console.log(pickedwordeng);
} )


function checkwords(){
    if(pickedwordeng == "What" && pickedwordger == "Was"){
        console.log("ja");
        var wordwhatclass = document.querySelector(".w1");
        var wordwasclass= document.querySelector(".w3g");
        wordwasclass.classList.toggle("active");
        wordwhatclass.classList.toggle("active");
        
    }
    else if(pickedwordeng == "You" && pickedwordger == "Du"){
        console.log("ja");
        var wordyouclass = document.querySelector(".w2");
        var wordduclass= document.querySelector(".w1g");
        wordduclass.classList.toggle("active");
        wordyouclass.classList.toggle("active");
    }
    else if(pickedwordeng == "Is" && pickedwordger == "Ist"){
        console.log("ja");
        var wordisclass = document.querySelector(".w3");
        var wordistclass= document.querySelector(".w2g");
        wordistclass.classList.toggle("active");
        wordisclass.classList.toggle("active");
    }
    else{
        console.log("no")
    }
     
}


