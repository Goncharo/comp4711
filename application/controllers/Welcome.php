<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	/**
	 * This is the controller for the homepage.
         * 
         * @author Luka Bresan
	 */
	public function index()
	{
            $this->data['pagebody'] = 'homepage';    // this is the view we want shown
            
            $this->render();
	}
}
