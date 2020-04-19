<?php 
require_once("config.php");
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
    default: {
        break;
    }
}

echo json_encode($response_data);
?>