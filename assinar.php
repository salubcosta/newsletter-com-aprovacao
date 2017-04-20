<form method="POST" class="form">
	<h2>Assine a Newsletter!</h2>
	<p><input type="text" name="nome" placeholder="Informe seu nome" required="true"></p>
	<p><input type="email" name="email" placeholder="Informe seu e-mail" required="true"></p>
	<input type="submit" value="Assinar" class="btn">
</form>

<?php
if(isset($_POST['nome']) && !empty(isset($_POST['nome'])) && isset($_POST['email']) && !empty($_POST['email'])){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$assinardao = new assinardao();

	$id = $assinardao->assinar($nome, $email);
	$md5 = md5($id);

	$link = URL.'/confirmar.php?h='.$md5;

	echo $link;exit;
}

?>