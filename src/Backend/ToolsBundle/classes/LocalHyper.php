<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LocalHyper
 *
 * @author farouk
 */
class LocalHyper {
    var $region;
    var $locals;
    
    function __construct() {
        
    }

    
function getRegion() {
    return $this->region;
}

 function getLocals() {
    return $this->locals;
}

 function setRegion($region) {
    $this->region = $region;
}

 function setLocals($locals) {
    $this->locals = $locals;
}
}

