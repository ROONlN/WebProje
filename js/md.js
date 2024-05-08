let isClicked = false;

function menuFunction(){

    if (isClicked){
        document.getElementById("arrow").style.transform = "rotate(1turn)";
        document.getElementById("navbar").style.display = "none";
        isClicked = false;
    }

    else{
        document.getElementById("arrow").style.transform = "rotate(0.5turn)";
        document.getElementById("navbar").style.display = "flex";
        isClicked = true;
    }

}