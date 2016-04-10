<?php

class Controller_Colis extends Controller_Base
{
  protected $TITLE = 'Colis';

  protected $USERS = array("1", "M. Dupain", "chargeur", "Paris", "arrivé");

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */
  public function action_create()
  {
    $this->template->content = View::forge('colis/new');
    $this->template->subtitle = 'Nouveau Colis';
  }

  public function action_index()
  {
    $this->template->content = View::forge('colis/index');
    $this->template->subtitle = 'Suivi des colis';
  }
}
