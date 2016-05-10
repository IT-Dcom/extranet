<?php
use \Model\searchclient;

class Controller_Client extends Controller_Base
{
  protected $TITLE = 'client';

  public function action_index()
  {
    $this->template->subtitle = 'Gestion client';
  }

  public function action_create()
  {
      $this->template->subtitle = 'Création d\'un client';
      $this->template->content = View::forge('client/index');
  }
  public function post_create()
  {
    $this->template->content = View::forge('client/clientok');
  }
  public function post_backhome()
  {
      $this->template->content = View::forge('home/index');
  }
  public function action_show()
  {
      $this->template->subtitle = 'Informations client';
      $this->template->content = View::forge('client/findclient');
  }
  public function post_show()
    {
        $email = $_POST['email'];
        $this->template->subtitle = 'Informations client';
        $results = searchclient::find_by_email($email);
        $this->template->content = View::forge('client/show', $results);
    }
}
