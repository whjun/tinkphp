<?php
namespace app\controller\test;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return '1111';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}