<?php
namespace Models;

use \Core\Model;
use Couchbase\Exception;
use PDO;

class Pessoas extends Model {

    public function get($hashcolaborador){
        $data = array();

        try{
            //Inner join com cargo, setor, estado, cidade
            $sqlQuerySelect = "SELECT 
                                      pd_pessoas.idpessoas,
                                      pd_pessoas.nome,
                                      pd_pessoas.aniversario,
                                      pd_pessoas.telefone1,
                                      pd_pessoas.imagem,
                                      pd_pessoas.imagem_interna_externa,
                                      rh_upgrades_colaboradores.dt_admissao,
                                      rh_cargos.nome as nome_cargo
                               FROM pd_pessoas 
                               RIGHT JOIN rh_upgrades_colaboradores ON pd_pessoas.idpessoas = rh_upgrades_colaboradores.idcolaborador
                               RIGHT JOIN rh_cargos ON rh_upgrades_colaboradores.idcargo = rh_cargos.idcargo
                               WHERE pd_pessoas.hash = :hash AND pd_pessoas.tipo = :tipo AND pd_pessoas.ativo = :ativo
                               ORDER BY rh_upgrades_colaboradores.dt_admissao DESC LIMIT 1";
            $sqlSelect = $this->db->prepare($sqlQuerySelect);
            $sqlSelect->bindValue(':hash', $hashcolaborador);
            $sqlSelect->bindValue(':tipo', 3);
            $sqlSelect->bindValue(':ativo', 1);
            $sqlSelect->execute();

            if ($sqlSelect->rowCount() > 0){
                $data = $sqlSelect->fetch(PDO::FETCH_ASSOC);
                return $data;
            }

        }catch (Exception $e){
            $data[] = 'EROR';
            return $data;
        }

    }

}