<?php
	include("../config.php");
	include(DBAPI);

	$adms = null;

	/**
	 *  Listagem de Clientes
	 */
	function index() {
		global $adms;
		$adms = find_all("adms");
	}

	/**
	 *  Visualização de um Cliente
	 */
	function view($id = null) {
		global $adms;
		$adms = find('adms', $id);
	}

	/**
	 *  Cadastro de Gerentes com upload de foto
	 */
	function addAdms() {
		if (!empty($_POST['adms'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$adms = $_POST['adms'];
			$adms['modified'] = $adms['created'] = $today->format("Y-m-d H:i:s");
	
			// Lida com o upload da imagem
			if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
				$uploadDir = 'imagens/'; // Alterado para a subpasta 'imagens'
				$uploadFile = $uploadDir . basename($_FILES['photo']['name']);
	
				// Verifica se a pasta de uploads existe, se não, cria
				if (!is_dir($uploadDir)) {
					mkdir($uploadDir, 0777, true);
				}
	
				// Move o arquivo para a pasta de uploads
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
					$adms['photo'] = $uploadFile; // Salva o caminho da imagem no array
				} else {
					echo "Erro ao fazer upload da imagem: " . $_FILES['photo']['error'];
				}
			} else {
				echo "Erro ao fazer upload: " . $_FILES['photo']['error']; // Exibe o erro se o upload falhar
			}
	
			save('adms', $adms);
			header('location: index.php');
		}
	}
	
	/**
	 *  Atualização/Edicao de Gerente
	 */
	function editAdms() {
		$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			if (isset($_POST['adms'])) {
				$adms = $_POST['adms'];
				$adms['modified'] = $now->format("Y-m-d H:i:s");

				// Lida com o upload da nova imagem
				if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
					$uploadDir = 'imagens/';
					$uploadFile = $uploadDir . basename($_FILES['photo']['name']);

					if (!is_dir($uploadDir)) {
						mkdir($uploadDir, 0777, true);
					}

					if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
						$adms['photo'] = $uploadFile;
					} else {
						echo "Erro ao fazer upload da nova imagem.";
					}
				}

				update('adms', $id, $adms);
				header('location: index.php');
			} else {
				global $adms;
				$adms = find('adms', $id);
			}
		} else {
			header('location: index.php');
		}
	}

	/**
	 *  Exclusão de um Cliente ou Gerente
	 */

function delete($id = null) {

  global $adms;
  $adms = remove('adms', $id);

  header('location: index.php');
}
	
?>