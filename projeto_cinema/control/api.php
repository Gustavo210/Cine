<?php 
require_once("config.php");
session_start();
header('Content-Type: application/json');
$response_data = array(
    "status" => false,
    "error" => "",
    "data" => null
);

switch($_GET["method"]){
    case "getFilmes": {
        try{
            $search = $_GET['search'];
            $search = '%' . $search . '%';
            $sql = "SELECT * FROM filme where Nome LIKE :search ORDER BY idFilme DESC LIMIT 3";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam( ':search', $search);
            $result = $stmt->execute();
            $rows = $stmt->fetchAll();
            $response_data["status"] = true;
            $response_data["data"] = $rows;
        } catch (PDOException $e){
            $response_data["status"] = false;
            $response_data["error"] = 'Erro:' . $e->getMessage();
        }
        break;
    }
    case "getLogin":{
        try{
            $email = $_GET["email"];
            $senha = $_GET["senha"];
            $sql = "SELECT * FROM usuarios where email = :e and senha = :s";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam( ':e', $email);
            $stmt->bindParam( ':s', $senha);
            $result = $stmt->execute();
            if($stmt->rowCount() >= 1){
                $response_data["status"] = true;
                $rows = $stmt->fetchAll();
                $_SESSION["isLogged"] = true;
                $_SESSION["userId"] = $rows[0]["idUser"];
                $_SESSION["userName"] = $rows[0]["nome"];
                $response_data["data"] = $rows[0];
            } else {
                $response_data["status"] = false;
            }
        } catch (PDOException $e){
            $response_data["status"] = false;
            $response_data["error"] = 'Erro:' . $e->getMessage();
        }
        break;
    }
    case "addLogin":{
        try{
            $nome = $_GET["nome"];
            $email = $_GET["email"];
            $senha = $_GET["senha"];
            $sql = "INSERT INTO usuarios (nome,email,senha) VALUES (:n,:e,:s)";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam( ':n', $nome);
            $stmt->bindParam( ':e', $email);
            $stmt->bindParam( ':s', $senha);
            $result = $stmt->execute();
            if($stmt->rowCount() >= 1){
                $response_data["status"] = true;
                $_SESSION["isLogged"] = true;
                $_SESSION["userId"] = $PDO->lastInsertId(); 
                $_SESSION["userName"] =  $nome;
            } else {
                $response_data["status"] = false;
            }
        } catch (PDOException $e){
            $response_data["status"] = false;
            $response_data["error"] = 'Erro:' . $e->getMessage();
        }
        break;
    }
    case "getLogout": {
        session_destroy();
        $response_data["status"] = true;
        break;
    }
    default: {
        break;
    }
}
echo json_encode($response_data);
?>