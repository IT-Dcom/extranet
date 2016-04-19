<?php

class Controller_Colis extends Controller_Base
{
  protected $TITLE = 'Colis';
  protected $USERS = array();

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */
  public function action_create()
  {
    $this->template->subtitle = 'Nouveau Colis';
    $this->template->content  = View::forge('colis/new');
  }

  public function action_index()
  {
    $colis   = array();
    $colis[] = array('id' => 1, 'name' => 'M. Kouri', 'descr' => 'Chargeur',
                     'town' => 'Paris', 'status' => 'Arrivé');
    $colis[] = array('id' => 2, 'name' => 'M. Kristo', 'descr' => 'Fleur',
                     'town' => 'Ilé', 'status' => 'En livraison');
    $colis[] = array('id' => 3, 'name' => 'M. Beezu', 'descr' => 'Miroir',
                     'town' => 'Nancy', 'status' => 'Livré chez le voisin');

    $this->template->subtitle       = 'Suivi des colis';
    $this->template->content        = View::forge('colis/index');
    $this->template->content->users = $colis;
  }
}
