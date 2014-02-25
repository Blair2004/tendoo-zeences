<?php
class /*mettre lespace nom du thème*/_theme_admin_controller
{
	public function __construct($data)
	{
		$this->data				=&	$data;
		$this->core				=	Controller::instance();
		/*
		Utilisez c'est classe pour faire un interface embarqué.
		*/		
	}
	public function index()
	{
	}
}