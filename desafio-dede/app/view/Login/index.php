<head>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="switch.css">
</head>

<body>

    <div class="pc-container">
        <div>
            <h1>BANANEIRA DE BANANA</h1>
            <h2>Faça seu login para continuar.</h2>
        </div>
        <form action="../produto/index.php" method="post">
            <div>
                <input class="pc-input-login" placeholder="Seu Email" type="email" id="email" name="email" />
            </div>
            <div>
                <input class="pc-input-login" placeholder="Senha" type="password" id="senha" name="senha" />
            </div>
            <div>
                <input class="pc-botao" value="LOGIN" type="submit"></input>
            </div>

        </form>
        <div>
            <form action="../cadastro/index.php">
                <input class="pc-botao" value="CADASTRAR" type="submit"></input>
            </form>
        </div>
    </div>

</body>
<footer> </footer>