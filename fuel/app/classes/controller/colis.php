<?php

class Controller_Colis extends Controller_Base
{
  protected $TITLE = 'Colis';

  public function action_index()
  {
    $this->template->subtitle       = 'Suivi des colis';
    $this->template->content        = View::forge('colis/index');
    $this->template->content->colis = Model_Colis::get_results();
  }
}
