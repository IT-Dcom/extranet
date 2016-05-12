<?php

class Controller_Facturation extends Controller_Base
{
  protected $TITLE = 'Facturation';

  public function action_index()
  {
    $this->template->subtitle = 'Suivi de la Facturation';
    $this->template->content = View::forge('facturation/index');
  }
}
