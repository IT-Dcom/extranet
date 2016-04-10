<?php

class Controller_Colis extends Controller_Base
{
  protected $TITLE = 'Colis';
  protected $SUBTITLE = '';

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
}
