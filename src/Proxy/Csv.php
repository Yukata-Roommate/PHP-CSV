<?php

namespace YukataRm\Csv\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Csv\Proxy\Manager;

/**
 * Csv Proxy
 * 
 * @package YukataRm\Csv\Proxy
 * 
 * @method static \YukataRm\Csv\Interface\ReaderInterface reader()
 * @method static \YukataRm\Csv\Interface\WriterInterface writer()
 * 
 * @see \YukataRm\Csv\Proxy\Manager
 */
class Csv extends StaticProxy
{
    /** 
     * get class name calling dynamic method
     * 
     * @return string 
     */
    protected static function getCallableClassName(): string
    {
        return Manager::class;
    }
}
