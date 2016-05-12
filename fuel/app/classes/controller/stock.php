<?php

class Controller_Stock extends Controller_Base
{
  protected $TITLE = 'stock';

  public function action_index()
  {
    $this->template->subtitle = 'Suivi du stock';
    $this->template->content = View::forge('stock/index');
  }
}
