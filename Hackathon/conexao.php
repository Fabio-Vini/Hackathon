<?php
	
	$user = 'root';
	$senha = 'usbw';
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
	
	function CriarConta ($nome, $sobrenome, $email, $escolaridade, $datanasc, $telefone, $estado, $senha){
		$sql = 'INSERT INTO user (nome, sobrenome, email, escolaridade, datanasc, telefone, estado, senha) VALUES ("'.$nome.'", "'.$sobrenome.'","'.$email.'","'.$escolaridade.'","'.$datanasc.'","'.$telefone.'","'.$estado.'","'.$senha.'")';
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
		$sql .=' email = "' .$user.'"';
		$sql .= 'AND senha="'.$pass. '"';
		$res = $GLOBALS['con']->query($sql);
		if($res->num_rows > 0){
			//encontrou o usuario, guardamos os dados dele na sessão
			$user = $res->fetch_array();
			$_SESSION['cd'] = $user['cd'];
			$_SESSION['nome'] = $user['nome'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['foto'] = $user['foto'];
			$_SESSION['logado'] = true;
			//direcionamos ele para a pagina
			vai('home.php');
	
		}else{
			//não foi encontrado usuario com essa senha
			alert("Dados inválidos!Cadastre-se para poder entrar");
			vai('cadastrar.php');
		}
	}
	


?>