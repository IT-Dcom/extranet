<?php

abstract class Controller_Base extends Controller_Template
{
	protected $TITLE = '';

	public $template = 'layouts/base';

	/**
	*	@access public
	* @return null
	*/
	public function before()
  {
      parent::before();
			$this->template->head = View::forge('layouts/head');
			$this->template->head->title = $this->TITLE;

			$this->template->header = View::forge('layouts/header');

			$this->template->footer = View::forge('layouts/footer');
			$this->template->footer->title = $this->TITLE;
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
}
