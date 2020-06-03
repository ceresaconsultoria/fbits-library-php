<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fbits\Enum;

/**
 * Description of ReturnCode
 *
 * @author weslley
 */
class ReturnCode {
    
    const CODE_1002 = 1002;
    const CODE_1003 = 1003;
    const CODE_1500 = 1500;
    const CODE_1501 = 1501;
    const CODE_1502 = 1502;
    const CODE_1504 = 1504;
    const CODE_1505 = 1505;
    const CODE_1506 = 1506;
    const CODE_1507 = 1507;
    const CODE_1508 = 1508;
    const CODE_1509 = 1509;
    const CODE_1510 = 1510;
    const CODE_15011 = 15011;
    const CODE_15012 = 15012;
    const CODE_15113 = 15113;
    const CODE_15114 = 15114;
    const CODE_15115 = 15115;
    const CODE_15116 = 15116;
    
    const CODE_200 = 200;
    const CODE_201 = 201;
    const CODE_400 = 400;
    const CODE_401 = 401;
    const CODE_403 = 403;
    const CODE_404 = 404;
    const CODE_405 = 405;
    const CODE_409 = 409;
    const CODE_500 = 500;
    
    public static function success($code){        
        return in_array($code, [ReturnCode::CODE_200, ReturnCode::CODE_201]);
    }
    
    public static function codeDescription($code, $defaultMsg = ""){
        switch($code){
            case ReturnCode::CODE_1002:
                return "Item possui vínculo com outros itens da base";
                
            case ReturnCode::CODE_1003:
                return "Combinação de parâmetros inválida";
                
            case ReturnCode::CODE_1500:
                return "Categoria PaiId inválida";
                
            case ReturnCode::CODE_1501:
                return "Campo não preenchido";
                
            case ReturnCode::CODE_1502:
                return "Email já cadastrado";
                
            case ReturnCode::CODE_1504:
                return "Atributo existente";
                
            case ReturnCode::CODE_1505:
                return "Fabricante existente";
                
            case ReturnCode::CODE_1506:
                return "Parceiro Existe";
                
            case ReturnCode::CODE_1507:
                return "Tabela de preço existente";
                
            case ReturnCode::CODE_1508:
                return "Usuário existente";
                
            case ReturnCode::CODE_1509:
                return "Usuário inexistente";
                
            case ReturnCode::CODE_1510:
                return "Campo preenchido incorretamente";
                
            case ReturnCode::CODE_15011:
                return "Endereço não pertencente ao usuário";
                
            case ReturnCode::CODE_15012:
                return "Item não encontrado";
                
            case ReturnCode::CODE_15113:
                return "Erro ao inserir pedido";
                
            case ReturnCode::CODE_15114:
                return "Erro ao converter imagem";
                
            case ReturnCode::CODE_15115:
                return "Formato de imagem incorreto";
                
            case ReturnCode::CODE_15116:
                return "Erro ao excluir um item";
                
            default:
                return $defaultMsg;
        }
    }
    
}
