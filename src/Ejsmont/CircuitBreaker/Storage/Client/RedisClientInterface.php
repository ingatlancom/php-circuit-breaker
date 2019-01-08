<?php

namespace Ejsmont\CircuitBreaker\Storage\Client;

interface RedisClientInterface
{
    /**
     * @param string $key
     * @return string|bool
     */
    public function get($key);

    /**
     * @param string  $key
     * @param string  $value
     * @param int|array timeout
     * @return  bool
     */
    public function set($key, $value, $timeout = 0);
}
