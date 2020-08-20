<?php
namespace Models;

use \Core\Model;
use Couchbase\Exception;
use PDO;

class PessoasAnexos extends Model {

    public function getAll($tpAnexo){
        $data = array();

        try{
            $idconta = $_SESSION['idconta'];
            $idpessoas = $_SESSION['idpessoas'];

            //Inner join com cargo, setor, estado, cidade

            $sqlQuerySelect = "SELECT 
                                      pa.idpessoas_anexo,
                                      pa.descricao,
                                      pa.caminho,
                                      pa.data_cadastro
                               FROM pd_pessoas_anexos as pa
                               WHERE pa.idpessoa = :idpessoa AND pa.tipo_upload = :tipo AND pa.ativo = :ativo AND pa.idconta = :idconta ORDER BY pa.idpessoas_anexo DESC";

            $sqlSelect = $this->db->prepare($sqlQuerySelect);
            $sqlSelect->bindValue(':idpessoa', $idpessoas);
            $sqlSelect->bindValue(':tipo', $tpAnexo);
            $sqlSelect->bindValue(':ativo', 1);
            $sqlSelect->bindValue(":idconta", $idconta);
            $sqlSelect->execute();

            if ($sqlSelect->rowCount() > 0){
                $data = $sqlSelect->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }

        }catch (Exception $e){
            $data[] = 'EROR';
            return $data;
        }



    }

}