<?php
namespace app\admin\controller;

class Admin extends Base
{
	public function _initialize()
	{
    	
	}

	public function login()
	{
		return $this->fetch();
	}
}