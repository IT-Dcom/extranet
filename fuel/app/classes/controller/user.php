<?php

class Controller_User extends Controller_Base
{
  protected $TITLE = 'User';

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */
  public function action_profil()
  {
    $this->template->content = View::forge('user/profil');
    $this->template->subtitle = 'Mon profil';
  }
}
