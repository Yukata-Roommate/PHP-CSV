<?php

namespace YukataRm\Csv\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Csv\Proxy\Manager\ReaderManager as Manager;

/**
 * Reader Proxy
 * 
 * @package YukataRm\Csv\Proxy
 * 
 * @method static \YukataRm\Csv\Interface\ReaderInterface make()
 * @method static \YukataRm\Csv\Interface\ReaderInterface makeFrom(string $path)
 * 
 * @method static string|null read(string $path)
 * 
 * @method static array readByLine(string $path, int $start = 1)
 * @method static \Generator readLineByLine(string $path, int $start = 1)
 * 
 * @method static array readByChunk(string $path, int $row = 1, int $start = 1)
 * @method static \Generator readChunkByChunk(string $path, int $row = 1, int $start = 1)
 * 
 * @see \YukataRm\Csv\Proxy\Manager\ReaderManager
 */
class Reader extends StaticProxy
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
