<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fbits\Core;

use GuzzleHttp\Client;

/**
 * Description of FbitsHttp
 *
 * @author weslley
 */
class FbitsHttp {
    
    protected $http;
    
    const BASE_URL = "https://api.fbits.net/";
    
    public function __construct(array $config = []) {
        $defaultConfig = array(
            'base_uri' => self::BASE_URL,
            'timeout' => 10,
            'headers' => array(
                'content-type' => 'application/json'
            )
        );
        
        $defaultConfig = array_merge($defaultConfig, $config);
                
        $this->http = new Client($defaultConfig);
    }
    
}
