<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/19
 * Time: 下午6:19
 */

namespace Ontology\Tests\Network;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

class GuzzleHttpTest extends TestCase
{

    public function testRequest():void {
        $client = new Client();
        $response = $client->request("GET", "http://localhost:8080/api/province");

        $body = $response->getBody();
        $contents = $body->getContents();
        $provinces = json_decode($contents);
        var_dump($provinces[0]);
    }

    public function testRequestAsync():void {
        $client = new Client();
        $promise = $client->requestAsync("GET", "http://localhost:8080/api/province");
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
            var_dump($provinces[1]);
        } catch (RequestException $e) {
            var_dump($e);
        }
    }

    public function testSend():void {
        $request = new Request("GET", "http://localhost:8080/api/province");
        $client = new Client();
        $response = $client->send($request);
        $body = $response->getBody();
        $contents = $body->getContents();
        $provinces = json_decode($contents);
        var_dump($provinces[2]);
    }

    public function testSendAsync():void {
        $request = new Request("GET", "http://localhost:8080/api/province");
        $client = new Client();
        $promise = $client->sendAsync($request);
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