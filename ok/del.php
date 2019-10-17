
<?php
    include '../head.php';
    $data = file(fra_FILE);

unset($data);

file_put_contents(fra_FILE,  $data);
 ?>
<body>
	
</body>
    <div class="message">
        <h1>Dados Removido</h1>
        <a href="../logado.php">Voltar</a>
    </div>
</body>
</html> 
</body>
