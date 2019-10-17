<?php
    include 'init.php';
    
    if (is_logged()) {
        header('location: logado.php');
    }
    $inputs = [
        'nome' => 'text',
        'email' => 'text',
        'telefone' => 'number',
        'senha' => 'password',
        'senha2' => 'password',
    ];
    $usuariosFile = file('users.csv');
    $usuarios = [];
    foreach ($usuariosFile as $usuario) {
        $usuarioData = explode(',', $usuario);
        $nome = $usuarioData[0];
        $usuarios[] = $nome; 
    }
?>

<?php
require 'head.php';
?>

 <div>
        <h3>Cadastro</h3>
        <?php if (get('message') !== false): ?>
            <div class="message">
                <?= get('message') ?>
            </div>
        <?php endif ?>

    <form action="register.php" method="POST">
        <?php foreach ($inputs as $name => $type): ?>
            <input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>" ><br>
        <?php endforeach ?>

        <input type="submit" value="Cadastrar" href="logado.php">
        <a href="login.php">Já sou cadastrado</a>

    </form>

    </div>