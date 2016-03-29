<?php

class Controller_Home extends Controller_Base
{
  protected $TITLE = 'Home';

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */
  public function action_index()
  {
    $this->template->content = View::forge('home/index');
  }
}
