<?php
    include 'head.php';
 

$data = file(fra_FILE);

$framework = [];


$framework = array_map('explodir', $data);

 ?>


<body>
	<?php
	$_linguagem = $_POST['Linguagem'];
	$_gerenciador = $_POST['Gerenciador'];
	$_framework = $_POST['Framework'];

	$handle = fopen(fra_fra, 'a');
	fwrite($handle, $dados);
	fclose($handle);
	?>

	<h1>Dados Adquiridos</h1>
	<div>
	<table class="highlight striped">
		<tr>
			<th >Linguagem</th>
			<th>Gerenciador</th>
			<th>Framework</th>
		</tr>
		<a href="ok/add.php">adicionar</a>
		<?php foreach ($dados as $dado): ?>
			<?php				
			list($linguagem, $gerenciador, $framework) = $dado;
			 ?>
			 <tr>
			 	<td><?= $linguagem ?></td>
			 	<td><?= $gerenciador ?></td>
			 	<td><?= $framework ?></td>
			 	<td ><a href="ok/del.php">apagar</a>
			 	

			 </tr>
		<?php endforeach ?>
	</table>
	</div>
	</body>
	</html>