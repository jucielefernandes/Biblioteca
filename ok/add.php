<?php
    include '../head.php';
 ?>

 
<body>
    <form action="../logado.php" method="POST">
        <fieldset>
            <legend>Informações</legend>
            <input type="text" name="linguagem" placeholder="Linguagem">
            <input type="text" name="gerenciador" placeholder="Gerenciador">
            <input type="text" name="framework" placeholder="Framework">
            <input type="submit" value="ok">
        </fieldset>
    </form>
</body>
</html>