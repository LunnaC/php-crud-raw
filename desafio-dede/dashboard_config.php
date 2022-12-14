<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="listaL">
        <ul>
            <li> <img src="banana-sem-fundo.png" class="banana-mini"></li>
            <li> <a href="dashboard_produtos.php">Produtos</a> </li>
            <li> <a href="dashboard_cad.php">Cadastros dos Clientes</a> </li>
            <li> <a href="dashboard_config.php">Configuracao da Conta</a> </li>
        </ul>
    </div>

    <div class="dashboardR">
        <h1>CONFIGURACAO DA CONTA</h1>
    </div>

    <div class="breadcrumb"> <span><b> Informações do perfil do usuario no sistema </b> </span> </div>

    <div class="config">
        <b>Informações básicas</b>
        <div>
            <input class="pc-input-config" placeholder="Andre" type="text" id="nome" name="nome" />
        </div>
        <div>
            <input class="pc-input-config" placeholder="Leite" type="text" id="sobrenome" name="sobrenome" />
        </div>
        <div>
            <input class="pc-input-config" placeholder="432.654.765.21" type="text" id="cpf" name="cpf" />
        </div>
        <div>
            <input class="pc-input-config" placeholder="24/08/2000" type="text" onfocus="(this.type = 'date')"
                id="dt-nasc" name="dt-nasc" />
        </div>

        <div>
            <b>Informações de contato</b>
            <div>
                <input class="pc-input-config" placeholder="dende@gmail.com" type="email" id="email" name="email" />
            </div>
            <div>
                <input class="pc-input-config" placeholder="(11)9999999" type="text" id="tele" name="tele" />
            </div>
            <b>Alterar senha</b>
            <div>
                <input class="pc-input-config" placeholder="Nova senha" type="password" id="senha" name="senha" />
            </div>
            <div>
                <input class="pc-input-config" placeholder="Confirmar Senha" type="password" id="senha-c"
                    name="senha-c" />
            </div>
            <div>
                <input class="pc-botao-config" value="ALTERAR" type="submit"></input>
            </div>
        </div>
    </div>