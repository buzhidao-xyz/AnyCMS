<?php
namespace app\front\controller;

use app\front\model\Column as ColumnM;

class Index extends Common
{
	public function _initialize()
	{
    	$this->assign('module', 'front');
	}

    public function index()
    {
        return $this->fetch();
    }

    public function test()
    {
        return $this->fetch();
    }

    public function columnlist()
    {
        $columnlist = ColumnM::all();
        $columnlist = collection($columnlist)->toArray();

        $this->assign('columnlist', $columnlist);
        return $this->fetch();
    }
}
