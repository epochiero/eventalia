<?php

class LoginController extends AppController {
    var $uses = array('Pais');

	function index() {
	    $params = array('order' => array('Pais.printable_name ASC'));
		$paises = $this->Pais->find('all', $params);
        $this->set('paises',$paises);
	
	
	}

}


?>
