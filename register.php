<?php
    include 'init.php';
    $nome = post('nome');
    $email = post('email');
    $telefone = post('telefone');
    $senha = post('senha');
    $senha2 = post('senha2');
?>

<?php if ($senha != $senha2): ?>
    <h1>Senhas não conferem; tente novamente</h1>
    <a href="index.php">Voltar</a>
    <?php exit(); ?>
<?php endif ?>

<?php
    $data = juntar([$nome, $email,  $telefone, md5($senha)]) . "\n";
    $handle = fopen('users.csv', 'a');
    fwrite($handle, $data);
    header('location: logado.php');
?>