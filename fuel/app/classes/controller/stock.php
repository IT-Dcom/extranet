<?php

class Controller_Stock extends Controller_Base
{
  protected $TITLE = 'Stock';
  protected $USERS = array();

  /**
  * The basic welcome message
  *
  * @access  public
  * @return  Response
  */

  public function action_index()
  {
    $this->USERS[] = array('ID' => 1, 'Name' => 'Television',
                      'Town' => 'Paris', 'Client' => 'M. Bake');
    $this->USERS[] = array('ID' => 2, 'Name' => 'Lampe',
                      'Town' => 'Melun', 'Client' => 'M. Kouri');
    $this->USERS[] = array('ID' => 3, 'Name' => 'Chargeur',
                      'Town' => 'Toulon', 'Client' => 'M. Bake');
    $this->template->subtitle = 'Suivi du stock';
    $this->template->content  = View::forge('stock/index');
    $this->template->content->users  = $this->USERS;
  }
}
