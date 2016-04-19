<?php

abstract class Controller_Base extends Controller_Template
{
	protected $TITLE    = '';
	protected $SUBTITLE = '';
	protected $navbar   = array();

	public $template = 'layouts/base';



	/**
	*	@access public
	* @return null
	*/
	public function before()
  {
      parent::before();
			$this->populate_navbar();
			Log::debug('Navbar populate');
			foreach($this->navbar as $a) {
				echo $a;
			}
			$this->template->head = View::forge('layouts/head');
			$this->template->head->title = $this->TITLE;

			$this->template->header = View::forge('layouts/header');
			$this->template->navbar = View::forge('layouts/navbar');
			$this->template->navbar->elements = $this->navbar;

			$this->template->footer = View::forge('layouts/footer');
			$this->template->footer->title = $this->TITLE;

			$this->template->subtitle = $this->SUBTITLE;
  }

	/**
	 * @access  public
	 * @return  Response
	 */
	public function after($response)
  {
      $response = parent::after($response);
      return $response;
  }

	/**
	 * Set the active navbar element
	 * @access  protected
	 * @return  Nothing
	 */
	protected function set_active($name)
	{
		foreach($this->navbar as $nav)
		{
			$nav['active'] = $nav['title'] == $name ? true : false;
		}
	}

	/**
	 * Populate the navbat with it's attributes
	 * @access  protected
	 * @return  Nothing
	 */
	private function populate_navbar()
	{
		$navbar[] = array('href' => '/', 'title' => 'Accueil',
											'icon' => 'home', 'active' => false);

		$navbar[] = array('href' => '#', 'title' => 'Compte client',
											'icon' => 'user', 'active' => false);

		$navbar[] = array('href' => '/colis', 'title' => 'Gestion colis',
											'icon' => 'folder-close', 'active' => false);

		$navbar[] = array('href' => '/colis/new',
											'title' => 'Enregistrer des colis',
											'icon' => 'log-in', 'active' => false);

		$navbar[] = array('href' => '/stock', 'title' => 'Suivi du stock',
											'icon' => 'folder-open', 'active' => false);

		$navbar[] = array('href' => '#', 'title' => 'Facturation',
											'icon' => 'euro', 'active' => false);
	}
}
