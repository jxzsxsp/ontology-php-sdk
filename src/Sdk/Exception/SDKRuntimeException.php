<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/28
 * Time: 下午3:24
 */

namespace Ontology\Sdk\Exception;


use Throwable;

class SDKRuntimeException extends \Exception
{

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->initExMsg($message);
    }

    private function initExMsg($message):void {

    }

}