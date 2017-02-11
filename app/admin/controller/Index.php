<?php
namespace app\admin\controller;

class Index extends Common
{
	public function _initialize()
	{
    	
	}

    public function index()
    {
        return $this->fetch();
    }
}
