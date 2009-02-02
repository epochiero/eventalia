<?php

class UsersController extends AppController {
  var $name = 'Users';    
  var $components = array('Auth');

  /**
   *  The AuthComponent provides the needed functionality
   *  for login, so you can leave this function blank.
   */
  function login() {
  }

  function logout() {
    $this->redirect($this->Auth->logout());
  }

  function beforeFilter() {
    $this->Auth->allow('index','view');
  }

}


