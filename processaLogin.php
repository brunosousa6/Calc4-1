<?php
// come�ar ou retomar uma sess�o
session_start();
 
// se vier um pedido para login
if (!empty($_POST)) {
 
	// estabelecer liga��o com a base de dados
	mysql_connect('hostsql', 'username', 'password') or die(mysql_error());
	mysql_select_db('basedados');
 
	// receber o pedido de login com seguran�a
	$username = mysql_real_escape_string($_POST['username']);
	$password = sha1($_POST['password']);
 
	// verificar o utilizador em quest�o (pretendemos obter uma �nica linha de registos)
	$login = mysql_query("SELECT userid, username FROM users WHERE username = '$username' AND password = '$password'");
 
	if ($login && mysql_num_rows($login) == 1) {
 
		// o utilizador est� correctamente validado
		// guardamos as suas informa��es numa sess�o
		$_SESSION['id'] = mysql_result($login, 0, 0);
		$_SESSION['username'] = mysql_result($login, 0, 1);
 
		echo "<p>Sess&atilde;o iniciada com sucesso como {$_SESSION['username']}</p>";
	} else {
 
		// falhou o login
		echo "<p>Utilizador ou password invalidos. <a href=\"login.php\">Tente novamente</a></p>";
	}
}
?>