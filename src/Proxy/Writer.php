<?php

namespace YukataRm\Csv\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Csv\Proxy\Manager\WriterManager as Manager;

/**
 * Writer Proxy
 * 
 * @package YukataRm\Csv\Proxy
 * 
 * @method static \YukataRm\Csv\Interface\WriterInterface make()
 * @method static \YukataRm\Csv\Interface\WriterInterface makeFrom(string $path)
 * 
 * @method static bool write(string $path, array $headers, array $content, bool $useFileAppend = false, bool $useLockEx = false)
 * 
 * @see \YukataRm\Csv\Proxy\Manager\WriterManager
 */
class Writer extends StaticProxy
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
