<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fbits;

use Fbits\Core\FbitsHttp;
use Fbits\Enum\ReturnCode;
use Fbits\Exceptions\FbitsException;

/**
 * Description of Categoria
 *
 * @author weslley
 */
class Categoria extends FbitsHttp{
    
    public function __construct() {
        $controller = FbitsController::getInstance();
        parent::__construct($controller->getConfig());
    }
            
    public function detalhesCategoria($id){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/categorias/".$id, array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ]
            ));
            
            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);               
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $ex->getMessage()), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);               
                                    
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        }
    }
    
    public function listarCategorias(array $filters = []){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/categorias", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "query" => $filters
            ));
            
            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);               
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $ex->getMessage()), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);               
                                    
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        }
    }
    
}
