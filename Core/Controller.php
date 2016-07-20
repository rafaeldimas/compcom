<?php

namespace Core;

use Core\MakeViews;


class Controller
{
	public $view;
	public $namepage;

	public function view($viewname, $parans = null)
	{
		$this->setNamePage($parans['namepage']);
		$make = new MakeViews();
		return $make->make($viewname,$parans);
	}

	private final function setNamePage($namepage)
	{
		return $this->namepage = $namepage;

	}
}