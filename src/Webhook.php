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
 * Description of Webhook
 *
 * @author weslley
 */
class Webhook extends FbitsHttp{
        
    public function __construct() {
        $controller = FbitsController::getInstance();
        parent::__construct($controller->getConfig());
    }
    
    public function removerInscricao($id){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->delete("/webhook/inscricao/" . $id, array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ]
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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
    
    public function listarTopicos(){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/webhook/topicos", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ]
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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
    
    public function atualizaStatusInscricao($id, $status){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->put("/webhook/inscricao/" . $id . "/" . $status, array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ]
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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
    
    public function atualizaInscricao($id, array $data){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->put("/webhook/inscricao/" . $id, array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "json" => $data
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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
    
    public function detalhesInscricao($id){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/webhook/inscricao/" . $id, array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ]
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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
    
    public function criarInscricao(array $data){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->post("/webhook/inscricao", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ],
                "json" => $data
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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
    
    public function listarInscricao(){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/webhook/inscricao", array(
                "headers" => [
                    "Authorization" => "BASIC " . $controller->getToken()
                ]
            ));

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            $response = $ex->getResponse();
            $body = (string)$response->getBody();
            $json = json_decode($body);                
                            
            if(is_object($json)){
                if(isset($json->codigo))
                    if(isset($json->mensagem))
                        throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
                    
                    throw new FbitsException(ReturnCode::codeDescription($json->codigo, $json->mensagem), $response->getStatusCode());
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