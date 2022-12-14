<head>
    <link rel="stylesheet" href="style.css">
</head>

<div class="formulario">

    <h2>Olá <?php echo ($_POST['nome']); ?>, obrigada por se cadastrar!</h2>
    <p>Confirme seu email:</p>
    <p><b><?php echo ($_POST['email']); ?></b></p>
    <p>Verifique que escolheu seus morangos corretamente e não fique sem sua sobremesa! </p>
    <div class="caixaMsg">
    <b> <?php echo ($_POST['msg']); ?> </b>
    </div>
</div>