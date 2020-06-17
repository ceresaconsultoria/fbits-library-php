<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fbits;

use Fbits\Core\FbitsHttp;

/**
 * Description of Carrinho
 *
 * @author weslley
 */
class Carrinho extends FbitsHttp{
    
    public function __construct() {
        $controller = FbitsController::getInstance();        
        parent::__construct($controller->getConfig());
    }
    
    public function adicionar(array $body, $cookies = null){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->post("/Produto/ComprarProduto", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "json" => $body,
                "cookies" => $cookies
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
    
    public function criar(array $filters = [], $cookies = null){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/api/carrinho", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "query" => $filters,
                "cookies" => $cookies
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
