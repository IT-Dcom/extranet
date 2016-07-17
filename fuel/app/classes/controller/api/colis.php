<?php

class Controller_Api_Colis extends Controller_Rest
{
  protected $format = 'json';

  public function get_index()
  {
    return Model_Colis::get_results()->as_array();
  }

  public function post_create() {
    if( !isset($_POST['name'])       || empty($_POST['name'])
    || !isset($_POST['description']) || empty($_POST['name'])
    || !isset($_POST['weight'])      || empty($_POST['name'])) {
      $this->response->status = 422;
      return array('message' => 'Argument missing', 'arguments' => $_POST);
    }
    return Model_Colis::create_colis($_POST['name'],
                                     $_POST['description'],
                                     $_POST['weight']);
  }
}
