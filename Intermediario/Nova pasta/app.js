

const switcherHidde = document.querySelector("#hiddeBtn")
var flag=0

switcherHidde.addEventListener('click', function hideTexts(){


    if(flag){
        show()
        flag=0
        this.textContent = "Esconder"
    }
    else{
        hidde();
        flag=1;
        this.textContent = "Mostrar"

    }
})


function hidde() {
    var x = document.getElementsByClassName("textContent");
    for (var i = 0; i < x.length; i++) {
      x[i].style.display = "none"
    }
  }

function show() {
    var x = document.getElementsByClassName("textContent");
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "block"
    }
}

const switcherDark = document.querySelector("#darkBtn")
dark = 0;

switcherDark.addEventListener('click', function(){
    const className = document.body.className;

    document.body.classList.toggle('ligth-theme');
    document.body.classList.toggle('dark-theme');

    if(dark){
        this.textContent = "Modo Escuro";
        dark=0;
    }else{
        this.textContent = "Modo Claro";
        dark=1;
    }


    console.log('current class name: ' + className);

})