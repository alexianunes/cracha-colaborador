<?php
/**
 * Created by PhpStorm.
 * User: Alexia
 * Date: 21/03/2019
 * Time: 19:37
 */

/** Formata data para o formato brasileiro ou americano com/sem horas
 * $data = date;
 * $formato = br ou en;
 * $horas = 0 (sem horas); 1 (com horas);
 * $segundos = 0 (sem segundos); 1 (com segundos);
 */
function formatarData($data, $formato, $horas, $segundos = '1')
{
    if ($formato == 'br' && $horas == '1' && $segundos == 0) {
        return date('d/m/Y H:i', strtotime($data));
    } elseif ($formato == 'br' && $horas == '1') {
        return date('d/m/Y H:i:s', strtotime($data));
    }elseif ($formato == 'br' && $horas == '0') {
        return date('d/m/Y', strtotime($data));
    } elseif ($formato == 'en' && $horas == '1' && $segundos == '0') {
        return date('Y/m/d  H:i', strtotime($data));
    } elseif ($formato == 'en' && $horas == '1') {
        return date('Y/m/d  H:i:s', strtotime($data));
    } elseif ($formato == 'en' && $horas == '0') {
        return date('Y/m/d', strtotime($data));
    }
}

function retornarIdade($dt_nascimento){
    // Separa em dia, mês e ano
    list($dia, $mes, $ano) = explode('/', $dt_nascimento);

    // Descobre que dia é hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    
    // Depois apenas fazemos o cálculo já citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    
    return $idade;
}

function retornarDiferencaDatas($dataDe, $dataAte){
    $data_inicio = new DateTime($dataDe);
    $data_fim = new DateTime($dataAte);

    // Resgata diferença entre as datas
    $dateInterval = $data_inicio->diff($data_fim);

    return $dateInterval->days;
}

/** Formata Decimal para o formato do banco dados
 * $get_valor = valor a ser formatado;
 */
function formataDecimalBanco($get_valor)
{
    $source  = array('.', ',');
    $replace = array('', '.');
    $valor   = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
    return $valor; //retorna o valor formatado para gravar no banco
}

/** Remove símbolos não alfa-numericos de uma string
 * $string = texto a ser retirado os símbolos
 * */
function removerSimbolos($string)
{
    return preg_replace("/[^a-zA-Z0-9\s]/", "", $string);
}

/** Verifica se o usuário tem permissão para acessar determinada página ou realizar determinada função
 * $verificar = nome da permissão (string)
 * $permissoes = array de permissões do usuário que está logado
 * $tipo = se for 0, não redireciona ou seja , serve para menus, botões
 * $tipo = se for 1, redireciona para a página de acesso proibido
 */
function verificaPermsissao($verificar, $permissoes, $tipo = 0)
{
    $array = explode(',', $permissoes);

    //Redireciona para página
    if ($tipo == 1) {
        if (!in_array($verificar, $array)) {
            echo ("<script>location.href = '" . BASE_URL . "Error/Forbidden';</script>");
            exit;
        } else {
            return true;
        }
    } else {
        if (!in_array($verificar, $array)) {
            return false;
        } else {
            return true;
        }
    }
}

/** FUNÇÃO PARA RETORNAR A URL ATUAL COM OS PARÂMETROS GET SE HOUVER */
function UrlAtualGet()
{
    $dominio = $_SERVER['HTTP_HOST'];
    $url     = "http://" . $dominio . $_SERVER['REQUEST_URI'];
    return $url;
}

/** FORMATA A DATA PARA O banco_de_dados */

function dateBancoDeDados($date){
    $ano= substr($date, 6);
    $mes= substr($date, 3,-5);
    $dia= substr($date, 0,-8);
    return $ano."-".$mes."-".$dia;
}

/** FORMATA A DATA PARA O banco_de_dados COM HORAS */

function dateTimeBancoDeDados($date){
    $time= substr($date, 11);
    $ano= substr($date, 6, 4);
    $mes= substr($date, 3, 2);
    $dia= substr($date, 0, 2);

    return $ano."-".$mes."-".$dia." ".$time;
}

function verificarEmailSetor($setorChamado, $atendenteSetor){

    if ($setorChamado == '1'){
        //RH
        return 'rh@agenciapegasus.com.br';
    }else if ($setorChamado == '2'){
        //Financeiro
        return 'adm@pegasustrademarketing.com.br';
    }else if ($setorChamado == '3'){
        //Coordenação

        if ($atendenteSetor == '1'){
            //Wesley
            return 'trade@agenciapegasus.com.br';
        }else if ($atendenteSetor == '2'){
            //Gleice
            return 'coordenacaopegasus@gmail.com';
        }
    }else if ($setorChamado == '4'){
        //Marketing
        return 'marketing@pegasustrademarketing.com.br';
    }else if ($setorChamado == '5'){
        //Suporte

        if ($atendenteSetor == '3'){
            //Tereza
            return 'pdv@agenciapegasus.com.br';
        }else if ($atendenteSetor == '4'){
            //Livia
            return 'pdv2@agenciapegasus.com.br';
        }
    }else if ($setorChamado == '6'){
        //Presidência
        return 'antunes@agenciapegasus.com.br';
    }


}