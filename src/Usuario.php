<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fbits;

use Fbits\Core\FbitsHttp;

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
    
}
