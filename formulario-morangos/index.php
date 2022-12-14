<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="formulario">
        <div> <h1>Bem-Vindo</h1>
                <h2>Vamos comprar morangos? Se cadastre para novidades.</h2>
        </div>       
        <form action="cadastro.php" method="post">
            <div>
                
                <input class="campinho" placeholder="Seu Nome" type="text" id="nome" name="nome" />
            </div>
            <div>
                <input class="campinho" placeholder="Seu Email" type="email" id="email" name="email" />
            </div>
            <div>
                
                <textarea class="campinho" placeholder="Escolha seus morangos e as quantidades!"  id="msg" name="msg"></textarea>
            </div>
            <div>
                <input class="botao"  value="CADASTRAR"type="submit"></input>
            </div>
        </form>
    </div>

</body>
<footer> </footer>