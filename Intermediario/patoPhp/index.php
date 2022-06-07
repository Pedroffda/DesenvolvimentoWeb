<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuckSite</title>
    <link rel="icon" type="image/x-icon" href="./components/images/pato2.png">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/fonts.css">
    <link rel="stylesheet" href="./styles/gallery.min.css">
    <link rel="stylesheet" href="./styles/gallery.theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body class="ligth-theme">
    <header>
        <h1 id="siteTitle">The Duck Site</h1>

        <ul class = "siteBar">
            <a href="#sumary" class="bar"><li>Inicio</li></a>
            <a href="#about" class="bar"><li>Sobre</li></a>
            <a href="#register" class="bar"><li>Apoie</li></a>
            <li><button id = "hiddeBtn">Esconder Conteúdo</button></li>
            <li><button id="darkBtn">Modo Escuro</li>

        </ul>

    </header>

    <div class="whiteBck">

        <section id="x">
             <section id="mainBody">
                <div>
                    <h2 id="sumary">Sumário</h2>
                    <p><a href="#channel">Canal do Youtube</a></p>
                    <p><a href="#register">Cadastro</a></p>
                </div>

                <h2 id="about">Sobre</h2>
                <p class="about textContent">Canal criado para analisar os algoritmos do youtube em determinado nicho de conteúdo, no caso LoFi, além disso tal canal tem como objetivo o desenvolvimento pessoal do discente em computação <a href="#foot">Pedro Felipe</a> na área de desenvolvimento web, assim o discente desenvolverá suas habilidades em HTML, CSS, JavaScript, PHP, Edição de Vídeos (DaVince) e Edição de Fotos (GIMP).</p>

                <div>
                    <h2 id="channel">Canal do Youtube</h2>
                    <p title="clique no link para visitar o canal" class="textContent">Link para o youtube <a href="https://www.youtube.com/channel/UCyHshI_XeffvFSzw8km_5JA/videos">aqui</a></p>
                </div>
            
                <div class="gallery items-2">
                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
            
                    <iframe class="item" src="https://www.youtube.com/embed/FY4gH9vHp6E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
                    <iframe class="item" src="https://www.youtube.com/embed/v3N0dtiEa5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
                    <div class="controls">
                        <a href="#item-1" class="control-button">.</a>
                        <a href="#item-2" class="control-button">.</a>
                    </div>
              
                </div>

            </section>

            <aside id="sideBody">
                <img src="./components/images/pato2.png" alt="duck" title="Pato" width="260" height="315" id="x">
        
                <!-- comments -->
                <h2 id="register">Cadastrar</h2>
                <p class="textContent">Você poderá se cadastrar ao nosso banco de dados clicando
                    <a href="cadastro.php">aqui</a>
                </p>

            </aside>

        </div>
    </section>

    <footer id="foot">
        <p>Autor: Pedro Felipe</p>
        <p>Discente do curso: Ciência da Computação na Universidade Federal do Piauí</p>
        <p> Email: <a href="mailto:pedrofelipeferreira1311@gmail.com">pedrofelipeferreira1311@gmail.com</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="./js/app.js"></script>
</body>
</html>
