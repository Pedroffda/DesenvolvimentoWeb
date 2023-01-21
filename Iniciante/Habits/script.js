const switcher = document.querySelector('.btn'); 

switcher.addEventListener('click', function(){
    document.body.classList.toggle('ligth-theme');
    document.body.classList.toggle('dark-theme');
    const className = document.body.className;
    if(className == "dark-theme"){
        this.textContent = "Modo Claro";
    }else{
        this.textContent = "Modo Escuro";
    }
    console.log('current class name: ' + className);
});

const form = document.querySelector("#form-habits")
const nlwSetup = new NLWSetup(form)
const button = document.querySelector(".add")
button.addEventListener("click", add)
form.addEventListener("change", save)

function add() {
  const today = new Date().toLocaleDateString("pt-br").slice(0, -5)
  const dayExists = nlwSetup.dayExists(today)
  if (dayExists) {
    alert("Dia ja incluso")
    return
  }
  alert("Dia adicionado ")
  nlwSetup.addDay(today)
}

function save() {
  localStorage.setItem("Setup@habits", JSON.stringify(nlwSetup.data))
}

const data = JSON.parse(localStorage.getItem("Setup@habits")) || {}

nlwSetup.setData(data)
nlwSetup.load()
