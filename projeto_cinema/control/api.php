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
    case "addCompra":{
        try{
            $ingressoTotal = $_GET["ingressoTotal"];
            $combosTotal = $_GET["combosTotal"];
            $compraTotal = $_GET["compraTotal"];
            $idCliente = $_GET["idCliente"];
            $boleto = $_GET["boleto"];
            $horario = $_GET["horario"];
            $id_filme = $_GET["id_filme"];
            $dia = $_GET["dia"];
            $assentos = $_GET["assentos"];
            $sql = "INSERT INTO compras (idCliente,
                                        ingressoTotal,
                                        combosTotal,
                                        compraTotal,
                                        boleto,
                                        data_compra,
                                        dia,
                                        horario,
                                        assentos,
                                        id_filme
                                        ) VALUES (
                                            :idCliente,
                                            :ingressoTotal,
                                            :combosTotal,
                                            :compraTotal,
                                            :boleto,
                                            now(),
                                            :dia,
                                            :horario,
                                            :assentos,
                                            :id_filme)";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam( ':idCliente', $idCliente);
            $stmt->bindParam( ':ingressoTotal', $ingressoTotal);
            $stmt->bindParam( ':combosTotal', $combosTotal);
            $stmt->bindParam( ':compraTotal', $compraTotal);
            $stmt->bindParam( ':boleto', $boleto);
            $stmt->bindParam( ':horario', $horario);
            $stmt->bindParam( ':dia', $dia);
            $stmt->bindParam( ':assentos', $assentos);
            $stmt->bindParam( ':id_filme', $id_filme);

            $result = $stmt->execute();
            if($stmt->rowCount() >= 1){
                $response_data["status"] = true;
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
    case "getHorario":{
        try{
            $idFilme = $_GET["id_filme"];
            $dia = $_GET["dia"];
            $sql = "SELECT {$dia} FROM sessoes where id_filme = :idFilme";
            $stmt = $PDO->prepare($sql);
            $stmt->bindParam( ':idFilme', $idFilme);
            $result = $stmt->execute();
            if($stmt->rowCount() >= 1){
                $response_data["status"] = true;
                $rows = $stmt->fetch();
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
    default: {
        break;
    }
}
echo json_encode($response_data);
?>