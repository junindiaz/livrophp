<?php
    function traduz_prioridade($codigo){
        $prioridade = '';
        switch ($codigo){
            case 1:
                $prioridade = 'Baixa';
                break;
            case 2:
                $prioridade = 'Média';
                break;
            case 3:
                $prioridade = 'Alta';
                break;                
        }
        return $prioridade;
    }
    //tradutor de data
    function traduz_data_para_exibir($data){
        if($data =="" OR $data == "0000-00-00"){
            return"nao informado";
        }
        $dados = explode("-",$data);
        $data_mysql = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
        return $data_mysql;
    }
    
    function traduz_concluida($concluida)
    {
        if ($concluida == 1) {
            return 'Sim';
        }
            return 'Não';
    }
    function tem_post(){
        if(count($_POST)>0){
            return true;
        }
        return false;
    }