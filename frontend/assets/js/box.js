let modal = document.getElementsByClassName('modal');
let btn = document.getElementsByClassName("box")

for(var i=0; i<btn.length; i++){
    btn[i].onclick = function(){
        if(i=1){
            for(var j=0; j<modal.length; j++)modal[j].style.display = "block";
        }
        else if(i=2){
            for(var j=0; j<modal.length; j++)modal[j].style.display = "block";
        }
        else if(i=3){
            for(var j=0; j<modal.length; j++)modal[j].style.display = "block";
        }
    }
}

let span = document.getElementsByClassName("close")[0];
span.onclick = function(){
    for(var j=0; j<modal.length; j++)modal[j].style.display = "none";
}