<!DOCTYPE html>
<html>
<head>
	<title>Sistema de acesso</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <form action="login.php" method="post">
		
     	<h2>Sistema de acesso</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Usuario</label>
     	<input type="text" name="uname" placeholder="Seu usuario"><br>

     	<label>Seu senha</label>
     	<input type="password" name="password" placeholder="Seu senha"><br>

     	<button type="submit">Entrar</button>
     </form>
</body>
</html>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>