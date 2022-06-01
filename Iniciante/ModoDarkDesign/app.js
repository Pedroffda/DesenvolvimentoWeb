/*
O JavaScript (ou ECMAScript) é uma linguagem de programação que ajuda você a adicionar
interatividade às suas páginas da Web.

Por exemplo, você pode usar o JavaScript para definir o comportamento que ocorrerá quando
um usuário selecionar um botão; por exemplo, abrir uma janela pop-up. 
Usando o JavaScript, você pode adicionar ou remover conteúdo de uma página da Web sem recarregá-lo.

A marca de script HTML <script> nos permitirá vincular a um arquivo JavaScript externo, 
que é como você configurará seu aplicativo Web neste exercício.
*/

'use-script';

const switcher = document.querySelector('.btn'); 

switcher.addEventListener('click', function(){

    document.body.classList.toggle('ligth-theme');
    document.body.classList.toggle('dark-theme');

    const className = document.body.className;
    if(className == "light-theme"){
        this.textContent = "Dark";
    }else{
        this.textContent = "Light";
    }

    console.log('current class name: ' + className);
});