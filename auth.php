<?php
    include 'init.php';

    $email = post('email');
    $senha = post('senha');
    $users = file('users.csv');

    foreach($users as $user) {
        $userData = explode(',', $user);
        if (trim($userData[1]) == $email && trim($userData[2]) == md5($senha)) {
            login($userData[0], $userData[2]);
            break;
        }
}
?>
<?php
    include 'head.php';
?>
<body>
    <?php if (is_logged()): ?>
        <?=header('location: logado.php');?>
    <?php else: ?>
        Login ou senha incorreto. 

        <button><a href="login.php">Voltar</a></button>
    <?php endif ?>
</body>
</html>