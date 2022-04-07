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
 * Description of Usuario
 *
 * @author weslley
 */
class Usuario extends FbitsHttp{
    
    public function __construct() {
        $controller = FbitsController::getInstance();
        parent::__construct($controller->getConfig());
    }
    
    public function editarEndereco($idOrEmail, $enderecoId, array $data){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->put("/usuarios/".$idOrEmail."/enderecos/".$enderecoId, array(
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
    
    public function criarEndereco($idOrEmail, array $data){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->post("/usuarios/".$idOrEmail."/enderecos", array(
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
    
    public function listarEnderecos($idOrEmail){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/usuarios/".$idOrEmail."/enderecos", array(
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
    
    public function editar($idOrEmail, array $data){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->put("/usuarios/".$idOrEmail, array(
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
    
    public function criar(array $data){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->post("/usuarios", array(
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
    
    public function detalhesViaId($id){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/usuarios/usuarioId/".$id, array(
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
    
    public function detalhesViaCnpj($cnpj){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/usuarios/cnpj/".$cnpj, array(
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
    
    public function detalhesViaCpf($cpf){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/usuarios/cpf/".$cpf, array(
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
    
    public function detalhesViaEmail($email){
        $controller = FbitsController::getInstance();
        
        try{
            $response = $this->http->get("/usuarios/email/".$email, array(
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
