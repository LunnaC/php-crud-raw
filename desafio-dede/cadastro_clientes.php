<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="switch.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    <div class="pc-container">
        <div class="pc-containerL pc-containerL-style">
            <h1>BANANEIRA DE BANANA</h1>
            <img src="banana-sem-fundo.png" class="banana">

        </div>
        <div class="pc-containerR pc-containerR-style">
            <form action="dashboard_produtos.php" method="post">
                <h2>Cadastre-se para completar suas compras.</h2>
                <div>
                    <input class="pc-input pc-containerL  mobile-resposive" placeholder="Nome" type="text" id="nome" name="nome" />
                </div>
                <div>
                    <input class="pc-input pc-containerR mobile-resposive " placeholder="Sobrenome" type="text" id="sobrenome"
                        name="sobrenome" />
                </div>
                <div>
                    <input class="pc-input pc-containerL mobile-resposive " placeholder="CPF" type="text" id="cpf" name="cpf" />
                </div>
                <div>
                    <input class="pc-input pc-containerR mobile-resposive " placeholder="Data de Nascimento" type="date" id="dt-nasc"
                        name="dt-nasc" />
                </div>

                <div>
                    <div>
                        <input class="pc-input pc-containerL mobile-resposive" placeholder="Seu Email" type="email" id="email"
                            name="email" />
                    </div>
                    <div>
                        <input class="pc-input pc-containerR mobile-resposive" placeholder="Telefone" type="text" id="tele"
                            name="tele" />
                    </div>
                    <div>
                        <input class="pc-input pc-containerL mobile-resposive" placeholder="Senha" type="password" id="senha"
                            name="senha" />
                    </div>
                    <div>
                        <input class="pc-input pc-containerR mobile-resposive" placeholder=" Confirmar Senha" type="password"
                            id="senha-c" name="senha-c" />
                    </div>


                    <div>
                        <input class="pc-botao" value="CADASTRAR" type="submit"></input>
                    </div>

            </form>

            <div>
                <form action="login_clientes.php">
                    <input class="pc-botao" value="LOGIN" type="submit"></input>
                </form>

            </div>
        </div>
    </div>

</body>
<footer> </footer>