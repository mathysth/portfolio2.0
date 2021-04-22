let selectedLang = "FR";

function updateLangSelect(selected){
    selectedLang = selected;
    switch (selected){
        case 'FR':{
            divClickEnable("#FR")
            divClickDisable("#EN")
            break;
        }
        case "EN":{
            divClickEnable("#EN")
            divClickDisable("#FR")
            break;
        }
    }
}

function divClickEnable(query){
    let div = getHtmlElement(query);
    div.style.background = "rgb(213 196 85)";
    div.style.border = "1px solid rgb(213 196 85)";
    div.style.color = "white";
}

function divClickDisable(query){
    let div = getHtmlElement(query);
    div.style.background = "white";
    div.style.border = "1px solid black";
    div.style.color = "#999999";
}
function getHtmlElement(query){
    return document.querySelector(query);
}

function confirmLangChange(){
    setLang(getHtmlElement("#"+selectedLang).innerText,{_force:true});
    setTimeout(function (e){
        document.location.href = document.location;
    },1000);
}