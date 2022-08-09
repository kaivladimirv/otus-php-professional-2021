<?php

declare(strict_types=1);

namespace App;

use Memcached;

class App
{
    public function run(): void
    {
        session_start();

        echo 'Session_id: ' . session_id() . '<br>';
        echo 'Nginx: ' . $_SERVER['SERVER_ADDR'] . '<br>';
        echo 'Php-fpm: ' . getHostByName(php_uname('n')) . '<br>';

        $this->testMemcached();
    }

    private function testMemcached(): void
    {
        $mem = new Memcached();
        $mem->addServer('mcrouter', 11211);

        $key = 'test1';
        $value = 'mem1';
        $result = $mem->set($key, $value);

        echo "Memcached. Set: " . ($result ? "{$key}={$value}" : 'value is not set') . '<br>';
        echo "Memcached. Get: {$key}=" . $mem->get($key) . '<br>';
    }
}
