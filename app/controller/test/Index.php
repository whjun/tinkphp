<?php
namespace app\controller\test;

use app\BaseController;
use think\worker\Server;

class Index extends Server
{
    protected $socket = 'http://0.0.0.0:2346';
    public function onMessage($connection,$data)
    {
        $connection->send(json_encode($data));
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
