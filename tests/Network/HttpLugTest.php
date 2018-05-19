<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/19
 * Time: 下午7:33
 */

namespace Ontology\Tests\Network;


use GuzzleHttp\Psr7\Request;
use Http\Adapter\Guzzle6\Client;
use Http\Client\Exception\RequestException;
use PHPUnit\Framework\TestCase;

class HttpLugTest extends TestCase
{

    public function testSendRequest():void {
        $request = new Request("GET", "http://localhost:8080/api/province");
        $client = new Client();
        $response = $client->sendRequest($request);
        $body = $response->getBody();
        $contents = $body->getContents();
        $provinces = json_decode($contents);
        var_dump($provinces[2]);
    }

    public function testSendAsyncRequest():void {
        $request = new Request("GET", "http://localhost:8080/api/province");
        $client = new Client();
        $promise = $client->sendAsyncRequest($request);
        $promise->then(function ($response) {
            return $response;
        }, function ($e) {
            throw $e;
        });

        try {
            $response = $promise->wait(true);
            $body = $response->getBody();
            $contents = $body->getContents();
            $provinces = json_decode($contents);
            var_dump($provinces[3]);
        } catch (RequestException $e) {
            var_dump($e);
        }
    }

}