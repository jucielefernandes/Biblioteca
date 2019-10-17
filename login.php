
<?php
require 'head.php';
?>
<body>
	<div>
		<h3>login</h3>
		<form action="auth.php" method="POST">
	        <input type="text" name="email" placeholder="Email">
	        <input type="password" name="senha" placeholder="Senha">
	        <input type="submit" value="Ok" href="logado.php">
            <a href="cadastro.php">Não sou cadastrado</a>
	    </form>
	</div>
</body>
</html>