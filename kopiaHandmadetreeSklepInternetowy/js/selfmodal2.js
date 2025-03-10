var tableImages = ['img-self/Hawajskie_Palmy/1','img-self/Hawajskie_Palmy/2','img-self/Hawajskie_Palmy/3','img-self/Hawajskie_Palmy/4','img-self/Hawajskie_Palmy/5','img-self/Hawajskie_Palmy/6','img-self/Hawajskie_Palmy/7','img-self/Hawajskie_Palmy/8','img-self/Hawajskie_Palmy/9','img-self/Hawajskie_Palmy/10','img-self/Hawajskie_Palmy/11','img-self/Hawajskie_Palmy/12','img-self/Hawajskie_Palmy/13','img-self/Hawajskie_Palmy/14','img-self/Hawajskie_Palmy/15','img-self/Hawajskie_Palmy/16'];

var id_mainTablica = document.getElementById("mainTablica");
var id_visibilityFoto= document.getElementById("visibilityFoto");
var id_rightFoto = document.getElementById("rightFoto");
var id_leftFoto = document.getElementById("leftFoto");
var id_close = document.getElementById("input3");

var indexPhoto = 0;

var id_0 = document.getElementById("0");var id_1 = document.getElementById("1");
var id_2 = document.getElementById("2");var id_3 = document.getElementById("3");
var id_4 = document.getElementById("4");var id_5 = document.getElementById("5");
var id_6 = document.getElementById("6");var id_7 = document.getElementById("7");
var id_8 = document.getElementById("8");var id_9 = document.getElementById("9");
var id_10 = document.getElementById("10");var id_11 = document.getElementById("11");
var id_12 = document.getElementById("12");var id_13 = document.getElementById("13");
var id_14 = document.getElementById("14");var id_15 = document.getElementById("15");

id_0.addEventListener("click",() => {mainSlider(0)});id_1.addEventListener("click",() => {mainSlider(1)});
id_2.addEventListener("click",() => {mainSlider(2)});id_3.addEventListener("click",() => {mainSlider(3)});
id_4.addEventListener("click",() => {mainSlider(4)});id_5.addEventListener("click",() => {mainSlider(5)});
id_6.addEventListener("click",() => {mainSlider(6)});id_7.addEventListener("click",() => {mainSlider(7)});
id_8.addEventListener("click",() => {mainSlider(8)});id_9.addEventListener("click",() => {mainSlider(9)});
id_10.addEventListener("click",() => {mainSlider(10)});id_11.addEventListener("click",() => {mainSlider(11)});
id_12.addEventListener("click",() => {mainSlider(12)});id_13.addEventListener("click",() => {mainSlider(13)});
id_14.addEventListener("click",() => {mainSlider(14)});id_15.addEventListener("click",() => {mainSlider(15)});

id_close.addEventListener("click",() => {id_mainTablica.style.display = "none";});
document.getElementById("input4").addEventListener("click",() => {id_mainTablica.style.display = "none";});
id_rightFoto.addEventListener("click",() => {mainSliderWhere(1)});
id_leftFoto.addEventListener("click",() => {mainSliderWhere(0)});

document.getElementById("leftFoto1").addEventListener("click",() => {mainSliderWhere(0)});
document.getElementById("rightFoto1").addEventListener("click",() => {mainSliderWhere(1)});

function mainSlider(parametr){
    var content = ""; 
    indexPhoto = parametr;
    content = "<img class='imgSliderMain' src='"+tableImages[parametr]+".jpg"+"'>";
    id_visibilityFoto.innerHTML = content;
    id_mainTablica.style.display = "block";
}
function mainSliderWhere(x){
    var content = ""; 
    if(x == 1){
        if(indexPhoto - 1 > 0){
            indexPhoto--;
        }else{
            indexPhoto = 15;
        }
    }else{
        if(indexPhoto + 1 < 15){
            indexPhoto++;
        }else{
            indexPhoto = 0;
        }
    }
    content = "<img class='imgSliderMain' src='"+tableImages[indexPhoto]+".jpg"+"'>";
    id_visibilityFoto.innerHTML = content;  
}
