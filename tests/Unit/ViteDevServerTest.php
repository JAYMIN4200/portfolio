<?php

namespace Tests\Unit;

use App\Support\ViteDevServer;
use Tests\TestCase;

class ViteDevServerTest extends TestCase
{
    public function test_a_malformed_hot_file_url_is_never_reachable(): void
    {
        $this->assertFalse(ViteDevServer::isReachable(''));
        $this->assertFalse(ViteDevServer::isReachable('not a url'));
    }

    public function test_a_closed_port_is_not_reachable(): void
    {
        $this->assertFalse(ViteDevServer::isReachable('http://127.0.0.1:1'));
    }

    public function test_an_open_port_is_reachable(): void
    {
        $server = stream_socket_server('tcp://127.0.0.1:0', $errorCode, $errorMessage);
        $this->assertIsResource($server, $errorMessage);

        $address = stream_socket_get_name($server, false);
        $port = (int) substr($address, strrpos($address, ':') + 1);

        try {
            $this->assertTrue(ViteDevServer::isReachable("http://127.0.0.1:{$port}"));
        } finally {
            fclose($server);
        }
    }
}
