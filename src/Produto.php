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
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

/**
 * Description of Produto
 *
 * @author weslley
 */
class Produto extends FbitsHttp{
    
    const TIPO_IDENTIFICADOR_SKU = "Sku";
    const TIPO_IDENTIFICADOR_PRODUTOID = "ProdutoId";
    const TIPO_IDENTIFICADOR_PRODUTOVARIANTID = "ProdutoVarianteId";
    
    public function __construct() {
        $controller = FbitsController::getInstance();
        parent::__construct($controller->getConfig());
    }
    
    public function produtosRelacionados($id, array $filters = []){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/produtos/".$id."/relacionados", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "query" => $filters
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $ex->getMessage()), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        } catch (ClientException $ex) {
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
    
    public function detalhesProduto($id, array $filters = []){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/produtos/".$id, array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "query" => $filters
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $ex->getMessage()), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        } catch (ClientException $ex) {
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
    
    public function listarImagensProduto($id, array $filters = []){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/produtos/".$id."/imagens", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "query" => $filters
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $ex->getMessage()), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        } catch (ClientException $ex) {
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
    
    public function listarProdutos(array $filters = []){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/produtos", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "query" => $filters
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $ex->getMessage()), $response->getStatusCode());
            }                          
            
            throw new FbitsException($ex->getMessage(), $response->getStatusCode());
        } catch (ClientException $ex) {
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
