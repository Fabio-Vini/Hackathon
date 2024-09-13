<?php
	
	$user = 'root';
	$senha = 'usbw';
	$senha = ' ';
	$banco = 'sistema_votacao';
	$server = 'localhost';
	$con = new mysqli ($server,$user,$senha,$banco);
	if (!$con){
		echo 'Erro ao conectar!' ;
	}
	
	function Proteger(){
		if(!$_SESSION['logado']){
			vai('index.php');
		}
	}
	
	function CriarConta ($nome, $email, $datanasc, $cargo, $rm, $senha){
		$sql = 'INSERT INTO user (nome, email, datanasc, cargo, rm, senha) VALUES ("'.$nome.'", "'.$email.'", "'.$datanasc.'",  "'.$cargo.'", "'.$rm.'", "'.$senha.'")';
			$resultado = $GLOBALS['con'] ->query($sql);
			if ($resultado){
				echo 'Cadastrado com sucesso!';
				vai('index.php');
			}
			else{
				echo 'Erro ao cadastrar.';
			}
		}
	
	function alert ($msg){
		echo '<script>
			alert("'.$msg.'");
			</script>';
	}
	function vai($url){
		echo '<script>
			window.location = "'.$url.'";
			</script>';
	}
	
	
	function Login($user,$pass){
		$sql = 'SELECT * FROM user WHERE';
		$sql .=' rm = "' .$user.' "';
		$sql .= 'AND senha="'.$pass. '"';
		$res = $GLOBALS['con']->query($sql);
		if($res->num_rows > 0){
			//encontrou o usuario, guardamos os dados dele na sessão
			$user = $res->fetch_array();
			$_SESSION['cd'] = $user['cd'];
			$_SESSION['rm'] = $user['rm'];
			$_SESSION['senha'] = $user['senha'];
			$_SESSION['foto'] = $user['foto'];
			$_SESSION['logado'] = true;
			//direcionamos ele para a pagina
			vai('home.html');
	
		}else{
			//não foi encontrado usuario com essa senha
			alert("Dados inválidos!Cadastre-se para poder entrar");
			vai('cadastrar.php');
		}
	}
	


?>
