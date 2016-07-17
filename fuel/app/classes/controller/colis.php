<?php

class Controller_Colis extends Controller_Base
{
  protected $TITLE = 'Colis';

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
    $this->template->subtitle       = 'Suivi des colis';
    $this->template->content        = View::forge('colis/index');
    $this->template->content->colis = Model_Colis::get_results();
  }
}
