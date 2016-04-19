<?php

/**
* A colis belongs to a stock.
* A stock have many colis.
*/
class Controller_Stock extends Controller_Base
{
  protected $TITLE = 'Stock';

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */

  public function action_index()
  {

    $clients = array();
    $clients[] = array('id' => 53, 'name' => 'Luc', 'zip' => '77124',
                       'email' => 'luc@hotmail.com', 'address' => 'Paris');

    $colis = array();
    $colis[] = array('id' => 1, 'name' => 'TV', 'weight' => '15 000',
                     'client' => $clients[0]);
    $colis[] = array('id' => 2, 'name' => 'Ordinateur', 'weight' => '10 000',
                     'client' => $clients[0]);


    $this->template->subtitle = 'Suivi du stock';
    $this->template->content  = View::forge('stock/index');
    $this->template->content->colis  = $colis;
  }
}
