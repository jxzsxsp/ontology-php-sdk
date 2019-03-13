<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/16
 * Time: 下午6:05
 */

namespace Ontology\Tests;

use Ontology\OntSdk;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class OntSdkTest extends TestCase
{

    private $appKey = 'akb9a8022c585745ce';
    private $appSecret = 'd4c778e8236d4b4aaa33666acd1bc4a7';
    private $timestamp = 1551870403896;
    private $version = '1.0';
    private $sign = '';
    private $url = 'https://open.aikucun.com/open/api/activity/query';
    private $testUrl = 'https://open.ikucun.com/open/api/activity/query';

    public function testSdk():void {
        echo "hi\n";
    }

    public function testActivity():void {
        $params['version'] = $this->version;
        $params['appKey'] = $this->appKey;
        $params['timestamp'] = (int) (microtime(true) * 1000);
//        $params['timestamp'] = $this->timestamp;
        ksort($params);

        $paramStr = \GuzzleHttp\json_encode($params);
//        var_dump($paramStr);
        $secretStr = $paramStr . $this->appSecret;
//        var_dump($secretStr);
        $base64 = base64_encode($secretStr);
//        var_dump($base64);
        $md5 = md5($base64);
//        var_dump($md5);
        $bytes = $this->getBytes($md5);
//        var_dump($bytes);

        $params['sign'] = $md5;

        var_dump($params);
        $client = new Client();
        $response = $client->request("GET", $this->url);

        $body = $response->getBody();
        var_dump($body);
        $contents = $body->getContents();
        var_dump($contents);
        $data = json_decode($contents);
        var_dump($data);
    }

    public function getBytes($string) {
        $bytes = array();
        for($i = 0; $i < strlen($string); $i++){
            $bytes[] = ord($string[$i]);
        }
        return $bytes;
    }

}
