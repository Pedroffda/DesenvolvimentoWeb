async function del(id){
    console.log("del: "+id);
}

async function alt(id){
    console.log("alt: "+id);
    const dados = await fetch('delete.php?id='+id);
    const resposta = await dados.json();
    console.log(resposta);
}

